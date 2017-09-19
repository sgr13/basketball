<?php

namespace BasketballBundle\Controller;

use BasketballBundle\Entity\Calendar;
use BasketballBundle\Entity\Player;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BasketballBundle\Form\BasketballType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    /**
     * @Route("/addGame")
     */
    public function addGameAction()
    {
        return $this->render('BasketballBundle:Main:add_game.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/addPlayer")
     */
    public function addPlayerAction(Request $request)
    {
        $player = new Player();
        $form = $this->createForm(BasketballType::class, $player);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $player = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($player);
            $em->flush();
            return new Response("Dodano nowego zawodnika");
        }
        return $this->render('BasketballBundle:Main:add_player.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/selectDay")
     */
    public function selectDayAction()
    {
        $calendar = new Calendar();
        var_dump($calendar);
        $selectedMonth = $calendar->getMonth();
        $selectedYear = $calendar->getYear();
        $calendar->setMonth($selectedMonth);
        $calendar->setYear($selectedYear);
        var_dump($calendar);

        return $this->render('BasketballBundle:Main:select_day.html.twig', array(
            'calendar' => $calendar
        ));
    }

    /**
     * @Route("/editPlayer")
     */
    public function editPlayerAction()
    {
        return $this->render('BasketballBundle:Main:edit_player.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deletePlayer")
     */
    public function deletePlayerAction()
    {
        return $this->render('BasketballBundle:Main:delete_player.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/editGame")
     */
    public function editGameAction()
    {
        return $this->render('BasketballBundle:Main:edit_game.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deleteGame")
     */
    public function deleteGameAction()
    {
        return $this->render('BasketballBundle:Main:delete_game.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showAll")
     */
    public function showAllAction()
    {
        return $this->render('BasketballBundle:Main:show_all.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showGame")
     */
    public function showGameAction()
    {
        return $this->render('BasketballBundle:Main:show_game.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/ahowPlayer")
     */
    public function ahowPlayerAction()
    {
        return $this->render('BasketballBundle:Main:ahow_player.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showAllPlayers")
     */
    public function showAllPlayersAction()
    {
        return $this->render('BasketballBundle:Main:show_all_players.html.twig', array(
            // ...
        ));
    }

}
