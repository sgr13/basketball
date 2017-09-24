<?php

namespace BasketballBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    /**
     * @Route("/register")
     */
    public function registerAction()
    {

        return $this->render('BasketballBundle:User:register.html.twig', array(

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
