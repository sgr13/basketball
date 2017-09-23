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
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="game")
     */
    private $p1t1;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="game")
     */
    private $p2t1;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="game")
     */
    private $p3t1;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="game")
     */
    private $p4t1;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="game")
     */
    private $p5t1;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="game")
     */
    private $p1t2;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="game")
     */
    private $p2t2;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="game")
     */
    private $p3t2;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="game")
     */
    private $p4t2;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="game")
     */
    private $p5t2;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="t1score", type="integer")
     */
    private $t1score;

    /**
     * @var int
     *
     * @ORM\Column(name="t2score", type="integer")
     */
    private $t2score;

    /**
     * @var string
     *
     * @ORM\Column(name="gameType", type="string", length=255)
     */
    private $gameType;


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
     * @param string $date
     * @return Game
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set t1score
     *
     * @param integer $t1score
     * @return Game
     */
    public function setT1score($t1score)
    {
        $this->t1score = $t1score;

        return $this;
    }

    /**
     * Get t1score
     *
     * @return integer 
     */
    public function getT1score()
    {
        return $this->t1score;
    }

    /**
     * Set t2score
     *
     * @param integer $t2score
     * @return Game
     */
    public function setT2score($t2score)
    {
        $this->t2score = $t2score;

        return $this;
    }

    /**
     * Get t2score
     *
     * @return integer 
     */
    public function getT2score()
    {
        return $this->t2score;
    }

    /**
     * @return mixed
     */
    public function getP1t1()
    {
        return $this->p1t1;
    }

    /**
     * @param mixed $p1t1
     */
    public function setP1t1($p1t1)
    {
        $this->p1t1 = $p1t1;
    }

    /**
     * @return mixed
     */
    public function getP2t1()
    {
        return $this->p2t1;
    }

    /**
     * @param mixed $p2t1
     */
    public function setP2t1($p2t1)
    {
        $this->p2t1 = $p2t1;
    }

    /**
     * @return mixed
     */
    public function getP3t1()
    {
        return $this->p3t1;
    }

    /**
     * @param mixed $p3t1
     */
    public function setP3t1($p3t1)
    {
        $this->p3t1 = $p3t1;
    }

    /**
     * @return mixed
     */
    public function getP4t1()
    {
        return $this->p4t1;
    }

    /**
     * @param mixed $p4t1
     */
    public function setP4t1($p4t1)
    {
        $this->p4t1 = $p4t1;
    }

    /**
     * @return mixed
     */
    public function getP5t1()
    {
        return $this->p5t1;
    }

    /**
     * @param mixed $p5t1
     */
    public function setP5t1($p5t1)
    {
        $this->p5t1 = $p5t1;
    }

    /**
     * @return mixed
     */
    public function getP1t2()
    {
        return $this->p1t2;
    }

    /**
     * @param mixed $p1t2
     */
    public function setP1t2($p1t2)
    {
        $this->p1t2 = $p1t2;
    }

    /**
     * @return mixed
     */
    public function getP2t2()
    {
        return $this->p2t2;
    }

    /**
     * @param mixed $p2t2
     */
    public function setP2t2($p2t2)
    {
        $this->p2t2 = $p2t2;
    }

    /**
     * @return mixed
     */
    public function getP3t2()
    {
        return $this->p3t2;
    }

    /**
     * @param mixed $p3t2
     */
    public function setP3t2($p3t2)
    {
        $this->p3t2 = $p3t2;
    }

    /**
     * @return mixed
     */
    public function getP4t2()
    {
        return $this->p4t2;
    }

    /**
     * @param mixed $p4t2
     */
    public function setP4t2($p4t2)
    {
        $this->p4t2 = $p4t2;
    }

    /**
     * @return mixed
     */
    public function getP5t2()
    {
        return $this->p5t2;
    }

    /**
     * @param mixed $p5t2
     */
    public function setP5t2($p5t2)
    {
        $this->p5t2 = $p5t2;
    }

    /**
     * @return string
     */
    public function getGameType()
    {
        return $this->gameType;
    }

    /**
     * @param string $gameType
     */
    public function setGameType($gameType)
    {
        $this->gameType = $gameType;
    }
}
