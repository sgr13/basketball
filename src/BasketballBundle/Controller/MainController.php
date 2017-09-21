<?php

namespace BasketballBundle\Controller;

use BasketballBundle\Entity\Calendar;
use BasketballBundle\Entity\Player;
use BasketballBundle\Entity\Team;
use BasketballBundle\Form\TeamType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BasketballBundle\Form\BasketballType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    /**
     * @Route("/addGame/{year}/{month}/{day}/{noDay}", name="addGame")
     */
    public function addGameAction(Request $request, $year, $month, $day, $noDay)
    {
        $em = $this->getDoctrine()->getManager();
        $month = $em->getRepository('BasketballBundle:Game')->getChangedDigit($month);

        $session = $request->getSession();
        $session->set('year', $year);
        $session->set('month', $month);
        $session->set('day', $day);
        $session->set('noDay', $noDay);

        $team = new Team();
        $form = $this->createForm(TeamType::class, $team);

        if ($request->request->get('gameType')) {
            var_dump($request);
        }


        return $this->render('BasketballBundle:Main:add_game.html.twig', array(
            'form' => $form->createView()
        ));
    }
//
//    /**
//     * @Route("/ajax", name="ajax")
//     */
//    public function ajaxAction(Request $request)
//    {
//        $data = $request->request->get('gameType');
//
//        return new response($form);
//    }

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
    public function selectDayAction(Request $request)
    {
        $calendar = new Calendar();
        $selectedMonth = $calendar->getMonth();
        $selectedYear = $calendar->getYear();

        if ($request->request->get('selectMonth')) {
            $selectedMonth = $request->request->get('selectMonth');
        }

        if ($request->request->get('selectYear')) {
            $selectedYear = $request->request->get('selectYear');
        }

        $calendar->setMonth($selectedMonth);
        $calendar->setYear($selectedYear);

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
