<?php

namespace BasketballBundle\Controller;

use BasketballBundle\Entity\Player;
use BasketballBundle\Form\BasketballType;
use BasketballBundle\Form\TeamType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @Route("/register")
     */
    public function registerAction(Request $request)
    {
        $player = new Player();
        $form = $this->createForm(new BasketballType(), $player, array(
            'noPhoto' => true
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $player = $form->getData();
            $player->setMainPhoto('');
            $player->setSecondPhoto('');
            $player->setStatus(0);

            if ($player->getPassword() == null) {
                return $this->render('BasketballBundle:User:register.html.twig', array(
                    'form' => $form->createView(),
                ));
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($player);
            $em->flush();

            return $this->redirectToRoute('admin');
        }
        return $this->render('BasketballBundle:User:register.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/login")
     */
    public function loginAction()
    {
        return $this->render('BasketballBundle:User:login.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/signIn")
     */
    public function signInAction()
    {
        return $this->render('BasketballBundle:User:sign_in.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/signOut")
     */
    public function signOutAction()
    {
        return $this->render('BasketballBundle:User:sign_out.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/myProfile")
     */
    public function myProfileAction()
    {
        return $this->render('BasketballBundle:User:my_profile.html.twig', array(
            // ...
        ));
    }

}
