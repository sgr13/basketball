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
     * @ORM\OneToMany(targetEntity="Game", mappedBy="Team")
     */
    private $game;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="Team")
     */
    private $player1;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="Team")
     */
    private $player2;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="Team")
     */
    private $player3;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="Team")
     */
    private $player4;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="Team")
     */
    private $player5;

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
     * @return mixed
     */
    public function getPlayer1()
    {
        return $this->player1;
    }

    /**
     * @param mixed $player1
     */
    public function setPlayer1($player1)
    {
        $this->player1 = $player1;
    }

    /**
     * @return mixed
     */
    public function getPlayer2()
    {
        return $this->player2;
    }

    /**
     * @param mixed $player2
     */
    public function setPlayer2($player2)
    {
        $this->player2 = $player2;
    }

    /**
     * @return mixed
     */
    public function getPlayer3()
    {
        return $this->player3;
    }

    /**
     * @param mixed $player3
     */
    public function setPlayer3($player3)
    {
        $this->player3 = $player3;
    }

    /**
     * @return mixed
     */
    public function getPlayer4()
    {
        return $this->player4;
    }

    /**
     * @param mixed $player4
     */
    public function setPlayer4($player4)
    {
        $this->player4 = $player4;
    }

    /**
     * @return mixed
     */
    public function getPlayer5()
    {
        return $this->player5;
    }

    /**
     * @param mixed $player5
     */
    public function setPlayer5($player5)
    {
        $this->player5 = $player5;
    }


}
