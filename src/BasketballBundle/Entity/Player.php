<?php

namespace BasketballBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Player
 *
 * @ORM\Table(name="player")
 * @ORM\Entity(repositoryClass="BasketballBundle\Repository\PlayerRepository")
 */
class Player
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", length=100)
     */
    private $nickname;

    /**
     * @var string
     *
     * @ORM\Column(name="mainPhoto", type="string", length=255)
     */
    private $mainPhoto;

    /**
     * @var string
     *
     * @ORM\Column(name="secondPhoto", type="string", length=255)
     */
    private $secondPhoto;

    /**
     * @var float
     *
     * @ORM\Column(name="height", type="float")
     */
    private $height;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="bestIn", type="string", length=255)
     */
    private $bestIn;


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
     * Set name
     *
     * @param string $name
     * @return Player
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     * @return Player
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string 
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set mainPhoto
     *
     * @param string $mainPhoto
     * @return Player
     */
    public function setMainPhoto($mainPhoto)
    {
        $this->mainPhoto = $mainPhoto;

        return $this;
    }

    /**
     * Get mainPhoto
     *
     * @return string 
     */
    public function getMainPhoto()
    {
        return $this->mainPhoto;
    }

    /**
     * Set secondPhoto
     *
     * @param string $secondPhoto
     * @return Player
     */
    public function setSecondPhoto($secondPhoto)
    {
        $this->secondPhoto = $secondPhoto;

        return $this;
    }

    /**
     * Get secondPhoto
     *
     * @return string 
     */
    public function getSecondPhoto()
    {
        return $this->secondPhoto;
    }

    /**
     * Set height
     *
     * @param float $height
     * @return Player
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return float 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set position
     *
     * @param string $position
     * @return Player
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set bestIn
     *
     * @param string $bestIn
     * @return Player
     */
    public function setBestIn($bestIn)
    {
        $this->bestIn = $bestIn;

        return $this;
    }

    /**
     * Get bestIn
     *
     * @return string 
     */
    public function getBestIn()
    {
        return $this->bestIn;
    }
}
