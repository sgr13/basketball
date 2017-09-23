<?php

namespace BasketballBundle\Controller;

use BasketballBundle\Entity\Calendar;
use BasketballBundle\Entity\Game;
use BasketballBundle\Entity\Player;
use BasketballBundle\Entity\Team;
use BasketballBundle\Form\TeamType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BasketballBundle\Form\BasketballType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class MainController extends Controller
{
    /**
     * @Route("/selectGameType/{year}/{month}/{day}/{noDay}", name="selectGameType")
     */
    public function addGameAction(Request $request, $year, $month, $day, $noDay)
    {
        $em = $this->getDoctrine()->getManager();
        $month = $em->getRepository('BasketballBundle:Game')->getChangedDigit($month);
        $playersRepository = $this->getDoctrine()->getRepository('BasketballBundle:Player');
        $allPlayers = $playersRepository->findAll();
        $date = $year . '/' . $month . '/' . $day;

        $session = $request->getSession();
        $session->set('date', $date);

        return $this->render('BasketballBundle:Main:select_game_type.html.twig', array(
            'allPlayers' => $allPlayers
        ));
    }

    /**
     * @Route("/addTeam")
     */
    public function addTeamAction(Request $request)
    {
        $gameType = $request->request->get('gameType');
        $game = new Game();
        $session = $request->getSession();

        if ($gameType != null) {
            $form = $this->createForm(new TeamType(), $game, array(
                $gameType => true
            ));
            $session->set('gameType', $gameType);

        } else {
            $gameType = $session->get('gameType');
            $form = $this->createForm(new TeamType(), $game, array(
                $gameType => true
            ));
        }

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $game = $form->getData();
            $game->setDate($session->get('date'));
            $game->setGameType($session->get('gameType'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($game);
            $em->flush();

            return $this->redirectToRoute('admin');
        }

        return $this->render('BasketballBundle:Main:addTeam.html.twig', array(
            'form' => $form->createView()
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
     * @Route("/selectDay", name="selectDay")
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
     * @Route("/admin", name="admin")
     */
    public function adminAction()
    {
        return $this->render('BasketballBundle:Main:admin.html.twig', array(

        ));
    }

    /**
     * @Route("/showPlayer/{id}", name="showPlayer")
     */
    public function editPlayerAction(Request $request, $id)
    {
        $player = $this->getDoctrine()->getRepository('BasketballBundle:Player')->find($id);
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new BasketballType(), $player);
        $form->handleRequest($request);
        return $this->render('BasketballBundle:Main:edit_player.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/editGame/{id}", name="editGame")
     */
    public function editGameAction(Request $request, $id)
    {
        $game = $this->getDoctrine()->getRepository('BasketballBundle:Game')->find($id);
        if (!$game) {
            throw new NotFoundHttpException('Nie znaleziono meczu o podanym id!');
        }
        $gameType = $game->getGameType();
        $form = $this->createForm(new TeamType(), $game, array(
            $gameType => true
        ));
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $game = $form->getData();
            $em->persist($game);
            $em->flush();

            return $this->redirectToRoute('admin');
        }
        return $this->render('BasketballBundle:Main:edit_game.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/deleteGame/{id}", name="deleteGame")
     */
    public function deleteGameAction($id)
    {
        $game = $this->getDoctrine()->getRepository('BasketballBundle:Game')->find($id);
        $em = $this->getDoctrine()->getManager();
        if (!$game) {
            throw new NotFoundHttpException("Nie znaleziono meczu o podanym id!");
        }

        $em->remove($game);
        $em->flush();

        return $this->redirectToRoute('admin');
    }

    /**
     * @Route("/showAll")
     */
    public function showAllAction(Request $request)
    {
        $allGames = $this->getDoctrine()->getRepository('BasketballBundle:Game')->findAll();
        return $this->render('BasketballBundle:Main:show_all.html.twig', array(
            'allGames' => $allGames
        ));
    }

    /**
     * @Route("/showAllPlayers")
     */
    public function showAllPlayersAction()
    {
        $allPlayers = $this->getDoctrine()->getRepository('BasketballBundle:Player')->findAll();
        return $this->render('BasketballBundle:Main:show_all_players.html.twig', array(
            'allPlayers' => $allPlayers
        ));
    }

}
