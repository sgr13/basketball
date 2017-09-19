<?php

namespace BasketballBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="team")
 * @ORM\Entity(repositoryClass="BasketballBundle\Repository\TeamRepository")
 */
class Team
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
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="player1", type="integer")
     */
    private $player1;

    /**
     * @var int
     *
     * @ORM\Column(name="player2", type="integer")
     */
    private $player2;

    /**
     * @var int
     *
     * @ORM\Column(name="player3", type="integer")
     */
    private $player3;

    /**
     * @var int
     *
     * @ORM\Column(name="player4", type="integer")
     */
    private $player4;

    /**
     * @var int
     *
     * @ORM\Column(name="player5", type="integer")
     */
    private $player5;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Team
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set player1
     *
     * @param integer $player1
     * @return Team
     */
    public function setPlayer1($player1)
    {
        $this->player1 = $player1;

        return $this;
    }

    /**
     * Get player1
     *
     * @return integer 
     */
    public function getPlayer1()
    {
        return $this->player1;
    }

    /**
     * Set player2
     *
     * @param integer $player2
     * @return Team
     */
    public function setPlayer2($player2)
    {
        $this->player2 = $player2;

        return $this;
    }

    /**
     * Get player2
     *
     * @return integer 
     */
    public function getPlayer2()
    {
        return $this->player2;
    }

    /**
     * Set player3
     *
     * @param integer $player3
     * @return Team
     */
    public function setPlayer3($player3)
    {
        $this->player3 = $player3;

        return $this;
    }

    /**
     * Get player3
     *
     * @return integer 
     */
    public function getPlayer3()
    {
        return $this->player3;
    }

    /**
     * Set player4
     *
     * @param integer $player4
     * @return Team
     */
    public function setPlayer4($player4)
    {
        $this->player4 = $player4;

        return $this;
    }

    /**
     * Get player4
     *
     * @return integer 
     */
    public function getPlayer4()
    {
        return $this->player4;
    }

    /**
     * Set player5
     *
     * @param integer $player5
     * @return Team
     */
    public function setPlayer5($player5)
    {
        $this->player5 = $player5;

        return $this;
    }

    /**
     * Get player5
     *
     * @return integer 
     */
    public function getPlayer5()
    {
        return $this->player5;
    }
}
