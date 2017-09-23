<?php

namespace BasketballBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActualList
 *
 * @ORM\Table(name="actual_list")
 * @ORM\Entity(repositoryClass="BasketballBundle\Repository\ActualListRepository")
 */
class ActualList
{
    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="actualList")
     */
    private $p1;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="actualList")
     */
    private $p2;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="actualList")
     */
    private $p3;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="actualList")
     */
    private $p4;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="actualList")
     */
    private $p5;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="actualList")
     */
    private $p6;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="actualList")
     */
    private $p7;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="actualList")
     */
    private $p8;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="actualList")
     */
    private $p9;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="actualList")
     */
    private $p10;

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
     * @return ActualList
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
     * @return mixed
     */
    public function getP1()
    {
        return $this->p1;
    }

    /**
     * @param mixed $p1
     */
    public function setP1($p1)
    {
        $this->p1 = $p1;
    }

    /**
     * @return mixed
     */
    public function getP2()
    {
        return $this->p2;
    }

    /**
     * @param mixed $p2
     */
    public function setP2($p2)
    {
        $this->p2 = $p2;
    }

    /**
     * @return mixed
     */
    public function getP3()
    {
        return $this->p3;
    }

    /**
     * @param mixed $p3
     */
    public function setP3($p3)
    {
        $this->p3 = $p3;
    }

    /**
     * @return mixed
     */
    public function getP4()
    {
        return $this->p4;
    }

    /**
     * @param mixed $p4
     */
    public function setP4($p4)
    {
        $this->p4 = $p4;
    }

    /**
     * @return mixed
     */
    public function getP5()
    {
        return $this->p5;
    }

    /**
     * @param mixed $p5
     */
    public function setP5($p5)
    {
        $this->p5 = $p5;
    }

    /**
     * @return mixed
     */
    public function getP6()
    {
        return $this->p6;
    }

    /**
     * @param mixed $p6
     */
    public function setP6($p6)
    {
        $this->p6 = $p6;
    }

    /**
     * @return mixed
     */
    public function getP7()
    {
        return $this->p7;
    }

    /**
     * @param mixed $p7
     */
    public function setP7($p7)
    {
        $this->p7 = $p7;
    }

    /**
     * @return mixed
     */
    public function getP8()
    {
        return $this->p8;
    }

    /**
     * @param mixed $p8
     */
    public function setP8($p8)
    {
        $this->p8 = $p8;
    }

    /**
     * @return mixed
     */
    public function getP9()
    {
        return $this->p9;
    }

    /**
     * @param mixed $p9
     */
    public function setP9($p9)
    {
        $this->p9 = $p9;
    }

    /**
     * @return mixed
     */
    public function getP10()
    {
        return $this->p10;
    }

    /**
     * @param mixed $p10
     */
    public function setP10($p10)
    {
        $this->p10 = $p10;
    }
}
