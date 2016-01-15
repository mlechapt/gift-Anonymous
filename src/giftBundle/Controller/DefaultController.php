<?php

namespace giftBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use giftBundle\Entity\User;
use giftBundle\Entity\UserEvent;
use giftBundle\Entity\Event;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
      // On vérifie que l'utilisateur dispose bien d'un compte'
      if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->render('giftBundle:Default:index.html.twig');
    }

    // l'utilisateur a les droits suffisant,
    // on peut afficher ses informations
    $user = $this->get('security.token_storage')->getToken()->getUser();
    
    $em = $this->getDoctrine()->getManager();

    // On récupère la liste des candidatures de cette annonce
    $listEvents = $em
      ->getRepository('giftBundle:Event')
      ->find($user->getId())
    ;

    if (null === $listEvents) {
      return $this->render('giftBundle:Default:index.html.twig',array('listEvent'=>$listEvents));
    }

      return $this->render('giftBundle:Default:index.html.twig',array('listEvents'=>$listEvents));
    }

    public function registerAction(Request $request)
    {
      // On crée un objet User
      $user = new User();

    // formulaire de création de compte
    $form=$this->createFormBuilder($user)
      ->add('username',TextType::class)
      ->add('firstname',TextType::class)
      ->add('password',PasswordType::class)
      ->add('email',TextType::class)
      ->add('save',SubmitType::class)
      ->getForm()
        ;

    $form->handleRequest($request);

    // On vérifie que les valeurs entrées sont correctes
    if ($form->isValid()) {
      // On l'enregistre notre objet $user dans la base de données, par exemple
      $em = $this->getDoctrine()->getManager();
      $em->persist($user);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Votre compte a bien été créé.');

      // On redirige vers la page de visualisation du compte nouvellement créé
      return $this->redirect($this->generateUrl('gift_myAccount', array('id' => $user->getId())));
    }

      return $this->render('giftBundle:Security:register.html.twig', array(
      'form' => $form->createView(),
      
    ));
    }

    public function createEventAction(Request $request)
    {
       if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      // Sinon on redirige vers le formulaire de création de compte
        $session=$request->getSession();
        $session->getFlashBag()->add('info','Vous devez être connecté pour créer un événement! ');

        return $this->redirect('register');
    }

    // On crée un objet Event
      $event = new Event();

    // formulaire de création de compte
    $form=$this->createFormBuilder($event)
      ->add('startdate',DateType::class)
      ->add('name',TextType::class)
      ->add('password',PasswordType::class)
      ->add('email',TextType::class)
      ->add('save',SubmitType::class)
      ->getForm()
        ;
    
    $event->setOwner($this->getUser(););

    $form->handleRequest($request);

    // On vérifie que les valeurs entrées sont correctes
    if ($form->isValid()) {
      // On l'enregistre notre objet $user dans la base de données, par exemple
      $em = $this->getDoctrine()->getManager();
      $em->persist($event);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', "L'événement a bien été créé.");

      // On redirige vers la page de visualisation du compte nouvellement créé
      return $this->redirect($this->generateUrl('gift_myAccount', array('id' => $user->getId())));
    }
   

    public function myAccountAction(Request $request)
    {

      if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      // Sinon on redirige vers le formulaire de création de compte
        $session=$request->getSession();
        $session->getFlashBag()->add('info',"Vous n'avez pas accès à cette page ! Inscrivez-vous pour continuer.");

        return $this->redirectToRoute('register');
      }
        return $this->render('giftBundle:Default:myAccount.html.twig');
    }

  public function loginAction(Request $request)
  {
    // Si le visiteur est déjà identifié, on le redirige vers l'accueil
    if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->redirectToRoute('gift_homepage');
    }
    
    $authenticationUtils = $this->get('security.authentication_utils');

    return $this->render('giftBundle:Security:login.html.twig', array(
      'last_username' => $authenticationUtils->getLastUsername(),
      'error'         => $authenticationUtils->getLastAuthenticationError(),
    ));
  }
}
