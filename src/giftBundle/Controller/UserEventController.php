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

class UserEventController extends Controller
{
    public function createUserEventAction(Request $request, $sharedToken){
      if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->redirectToRoute('fos_user_security_login',array("sharedToken"=>$sharedToken));
      }

      $em=$this->getDoctrine()->getManager();
      $event=$em->getRepository('giftBundle:Event')->findOneBy(array('sharedToken'=>$sharedToken));

      // On crée un objet UserEvent
      $userEvent = new UserEvent();
      $userEvent->setUser($this->getUser());
      $userEvent->setEvent($event);

      $em->persist($userEvent);
      $em->flush();

      $session=$request->getSession();
      $session->getFlashBag()->add('notice', "Vous avez été ajouté à l'événement.");

      // On redirige vers la page de visualisation des event
      return $this->redirect($this->generateUrl('gift_myAccount',array('session'=>$session)));
    }

}
