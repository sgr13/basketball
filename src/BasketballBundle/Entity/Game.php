<?php

namespace BasketballBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table(name="game")
 * @ORM\Entity(repositoryClass="BasketballBundle\Repository\GameRepository")
 */
class Game
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gameDate", type="date")
     */
    private $gameDate;

    /**
     * @var int
     *
     * @ORM\Column(name="team1", type="integer")
     */
    private $team1;

    /**
     * @var int
     *
     * @ORM\Column(name="team2", type="integer")
     */
    private $team2;

    /**
     * @var int
     *
     * @ORM\Column(name="team1Score", type="integer")
     */
    private $team1Score;

    /**
     * @var int
     *
     * @ORM\Column(name="team2Score", type="integer")
     */
    private $team2Score;

    /**
     * @var int
     *
     * @ORM\Column(name="bestPlayer", type="integer")
     */
    private $bestPlayer;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set gameDate
     *
     * @param \DateTime $gameDate
     * @return Game
     */
    public function setGameDate($gameDate)
    {
        $this->gameDate = $gameDate;

        return $this;
    }

    /**
     * Get gameDate
     *
     * @return \DateTime 
     */
    public function getGameDate()
    {
        return $this->gameDate;
    }

    /**
     * Set team1
     *
     * @param integer $team1
     * @return Game
     */
    public function setTeam1($team1)
    {
        $this->team1 = $team1;

        return $this;
    }

    /**
     * Get team1
     *
     * @return integer 
     */
    public function getTeam1()
    {
        return $this->team1;
    }

    /**
     * Set team2
     *
     * @param integer $team2
     * @return Game
     */
    public function setTeam2($team2)
    {
        $this->team2 = $team2;

        return $this;
    }

    /**
     * Get team2
     *
     * @return integer 
     */
    public function getTeam2()
    {
        return $this->team2;
    }

    /**
     * Set team1Score
     *
     * @param integer $team1Score
     * @return Game
     */
    public function setTeam1Score($team1Score)
    {
        $this->team1Score = $team1Score;

        return $this;
    }

    /**
     * Get team1Score
     *
     * @return integer 
     */
    public function getTeam1Score()
    {
        return $this->team1Score;
    }

    /**
     * Set team2Score
     *
     * @param integer $team2Score
     * @return Game
     */
    public function setTeam2Score($team2Score)
    {
        $this->team2Score = $team2Score;

        return $this;
    }

    /**
     * Get team2Score
     *
     * @return integer 
     */
    public function getTeam2Score()
    {
        return $this->team2Score;
    }

    /**
     * Set bestPlayer
     *
     * @param integer $bestPlayer
     * @return Game
     */
    public function setBestPlayer($bestPlayer)
    {
        $this->bestPlayer = $bestPlayer;

        return $this;
    }

    /**
     * Get bestPlayer
     *
     * @return integer 
     */
    public function getBestPlayer()
    {
        return $this->bestPlayer;
    }
}
