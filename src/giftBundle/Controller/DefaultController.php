<?php

namespace giftBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use userBundle\Entity\User;
use giftBundle\Entity\UserEvent;
use giftBundle\Entity\Event;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
      // On vérifie que l'utilisateur dispose bien d'un compte'
      if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->render('giftBundle:Default:index.html.twig');
    }
      return $this->redirectToRoute('gift_myAccount');
    }

    public function createEventAction(Request $request)
    {
       if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      // Sinon on redirige vers le formulaire de création de compte
        $session=$request->getSession();
        $session->getFlashBag()->add('info','Vous devez être connecté pour créer un événement! ');

        return $this->redirectToRoute("fos_user_registration_register");
    }

    // On crée un objet Event
     $event = new Event();

    // formulaire de création de compte
    $form=$this->createFormBuilder($event)
      ->add('startdate',DateType::class)
      ->add('name',TextType::class)
      ->add('save',SubmitType::class)
      ->getForm()
        ;
    
    $event->setOwner($this->getUser());

    $form->handleRequest($request);

    // On vérifie que les valeurs entrées sont correctes
    if ($form->isValid()) {
      // On l'enregistre notre objet $user dans la base de données, par exemple
      $em = $this->getDoctrine()->getManager();
      $em->persist($event);
      $em->flush();

      $session=$request->getSession();
      $session->getFlashBag()->add('notice', "L'événement a bien été créé.");

      // On redirige vers la page de visualisation du compte nouvellement créé
      return $this->redirect($this->generateUrl('gift_invitation', array(
                  'id' => $event->getId(),
                  'token' => $event->getToken())
              ));
    }
    return $this->render('giftBundle:Default:createEvent.html.twig', array('form' => $form->createView()
    ));
   }

    public function myAccountAction(Request $request)
    {

      if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      // Sinon on redirige vers le formulaire de création de compte
        $session=$request->getSession();
        $session->getFlashBag()->add('info',"Vous n'avez pas accès à cette page ! Inscrivez-vous pour continuer.");

        return $this->redirectToRoute('register');
      }

    //récupération de l'id du user actif
    $user = $this->get('security.token_storage')->getToken()->getUser();

    // On récupère la liste des candidatures de cette annonce
    $repository = $this->getDoctrine()->getManager()->getRepository('giftBundle:Event');
      

    $listEvents=$repository->findBy(
          array('owner'=>$user)
          );

      //var_dump($listEvents);
      //die; 
      return $this->render('giftBundle:Default:myAccount.html.twig',array('listEvents'=>$listEvents));

    }

  /*public function loginAction(Request $request)
  {
    // Si le visiteur est déjà identifié, on le redirige vers l'accueil
    if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->redirectToRoute('gift_myAccount');
    }
    
    $authenticationUtils = $this->get('security.authentication_utils');

    return $this->render('giftBundle:Security:login.html.twig', array(
      'last_username' => $authenticationUtils->getLastUsername(),
      'error'         => $authenticationUtils->getLastAuthenticationError(),
    ));
  }*/

  public function displayEventAction(Request $request, $token){
    if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->redirectToRoute('gift_createEvent');
    }

    $repository = $this->getDoctrine()->getManager()->getRepository('giftBundle:Event');

    $event=$repository->findBy(array('token'=>$token));

    $listGuests=array('charles','benjamin','martin','jeremy','louis','xavier','thomas');

    return $this->render('giftBundle:Default:event.html.twig', array(
      'token' => $token,
      'event' => $event,
      'guests' => $listGuests
      ));
  }

  public function invitationAction(Request $request, $token){
    
    $repository = $this->getDoctrine()->getManager();

    $user=$this->get('security.token_storage')->getToken()->getUser();
    $user=$repository->getRepository('userBundle:User')->find($user);
    $event=$repository->getRepository('giftBundle:Event')->findOneBy(array('token'=>$token));
    
    $urlHome=$this->generateUrl('gift_homepage', array(), UrlGeneratorInterface::ABSOLUTE_URL);
    $urlShare=$this->generateUrl('gift_invited', array('sharedToken' => $event->getSharedToken()), UrlGeneratorInterface::ABSOLUTE_URL);

    $message="Partagez le lien suivant auprès de vos amis pour les inviter à vous rejoindre: ".$urlShare;

    // On crée un objet invitation
     $email="";
     $msg="Votre ami " . $user->getUsername() ." " . $user->getFirstname() .
     ", vous invite à le rejoindre sur " . $urlHome. " " . 
     " en cliquant sur le lien suivant : " . $urlShare;

     $invite = array('email'=> $email,'message'=>$msg);

    // formulaire de création de compte
    $form=$this->createFormBuilder($invite)
      ->add('email',TextType::class)
      ->add('message', TextareaType::class)
      ->add('send',SubmitType::class)
      ->getForm()
        ;

        $form->handleRequest($request);

    //si le formulatire es valide, on envoie l'invitation par mail
    if ($form->isValid()) {
        $request->getSession()->getFlashBag()->add('notice', "L'invitation a bien été envoyée.");

        //création de l'email
        $mail = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('martin.lechaptois@gmail.com')
        ->setTo($form->get('email')->getData())
        ->setBody(
            $this->renderView(
                'Emails/invitationEmail.html.twig',
                array(
                  'name' => 'martin',
                  'message' => $form->get('message')->getData()
                  )
            ),
            'text/html'
        );

        $this->get('mailer')->send($mail);
      
      // On redirige vers la page d'invitatipon
      return $this->redirect($this->generateUrl('gift_invitation', array('token' => $token)));
    }

    //sinon on renvoie la page de formulaire d'invitation
    return $this->render('giftBundle:Default:invitation.html.twig', array(
      'message' => $message,
      'user' => $user,
      'event' => $event,
      'form' => $form->createView()
      ));
  }

  public function validationAction(Request $request, $sharedToken){
    if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->redirectToRoute('register',array('sharedToken'=>$sharedToken));
    }
      return $this->redirectToRoute('gift_invited',array('sharedToken'=>$sharedToken));
  }

}
