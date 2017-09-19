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
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="Game")
     */
    private $team1;

    /**
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="Game")
     */
    private $team2;

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
