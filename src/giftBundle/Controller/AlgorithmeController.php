<?php

namespace giftBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use userBundle\Entity\User;
use giftBundle\Entity\UserEvent;
use giftBundle\Entity\Event;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class AlgorithmeController extends Controller
{

  public function repartitionAction(Request $request, $token){
    
    //récupération des UserEvent
    $em = $this->getDoctrine()->getManager();
    $event=$em->getRepository('giftBundle:Event')->findOneBy(array('token'=>$token));

    if($event->getIsDistributed=true){
      return $this->redirect($this->generateUrl('gift_event',array('token'=>$token)));
    }


    $userEvents=$em->getRepository('giftBundle:UserEvent')->findBy(array('event'=>$event));

    $idUserEvent=[];
    //récupération des id des UserEvents dans un array
    foreach ($userEvents as $userEvent){
      array_push($idUserEvent, $userEvent->getUser()->getId());
    }
    
    //répartition du premier
    $gifterUser=$em->getRepository('userBundle:User')->findOneBy(array('id'=>$idUserEvent[count($idUserEvent)-1]));
    $giftedUser=$em->getRepository('userBundle:User')->findOneBy(array('id'=>$idUserEvent[0]));
    $em->getRepository('giftBundle:UserEvent')->findOneBy(array('user'=>$gifterUser))->setReceivedUser($giftedUser);
    $em->persist($userEvent);

     //envoi des email de répartition
      $messageCadeau="Bonjour,
      Pour le noel canadien: ". $event->getName() . ", vous devez offrir un cadeau à " . $giftedUser->getUsername(). " " . $giftedUser->getFirstname() .". Joyeux Noël !";

      $mail = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('martin.lechaptois@gmail.com')
        ->setTo($gifterUser->getEmail())
        ->setBody(
            $this->renderView(
                'Emails/invitationEmail.html.twig',
                array(
                  'name' => 'martin',
                  'message' => $messageCadeau,
                  )
            ),
            'text/html'
        );

        $this->get('mailer')->send($mail);

    //Répartition des received User
    $i=0;
    while ($i<count($idUserEvent)-1){
      var_dump($i);
      $gifterUser=$em->getRepository('userBundle:User')->findOneBy(array('id'=>$idUserEvent[$i]));
      $i++;
      $giftedUser=$em->getRepository('userBundle:User')->findOneBy(array('id'=>$idUserEvent[$i]));
      $em->getRepository('giftBundle:UserEvent')->findOneBy(array('user'=>$gifterUser))->setReceivedUser($giftedUser);
      $em->persist($userEvent);
      $em->flush();

      //envoi des email de répartition
      $messageCadeau="Bonjour, </br>
      Pour le noel canadien ". $event->getName() . ", vous devez offrir un cadeau à " . $giftedUser->getUsername(). " " . $giftedUser->getFirstname() .". Joyeux Noël !";

      $mail = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('martin.lechaptois@gmail.com')
        ->setTo($gifterUser->getEmail())
        ->setBody(
            $this->renderView(
                'Emails/repartitionEmail.html.twig',
                array(
                  'name' => 'martin',
                  'message' => $messageCadeau,
                  )
            ),
            'text/html'
        );

        $this->get('mailer')->send($mail);
    } 
    $event->setIsDistributed(true);
    $em->persist($event);
    $em->flush();

    return $this->redirect($this->generateUrl('gift_event',array('token'=>$token)));
  }
}