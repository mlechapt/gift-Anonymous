<?php

namespace giftBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="giftBundle\Repository\EventRepository")
 * @ORM\HasLifecycleCallbacks()
 */

class Event
{
    public function __construct()
    {
        $this->isDistributed=false;
    }

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
     * @ORM\Column(name="startdate", type="datetime")
     */
    private $startdate;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /**
    * @ORM\ManyToOne(targetEntity="userBundle\Entity\User", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="is_distributed", type="boolean")
     */
    private $isDistributed;


    /**
     * @var string
     *
     * @ORM\Column(name="sharedToken", type="string", length=255)
     */
    private $sharedToken;
    


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
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Event
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Event
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
     * Set owner
     *
     * @param \userBundle\Entity\User $owner
     *
     * @return Event
     */
    public function setOwner(\userBundle\Entity\User $owner = null)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return \userBundle\Entity\User
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return Event
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set isDistributed
     *
     * @param boolean $isDistributed
     *
     * @return Event
     */
    public function setIsDistributed($isDistributed)
    {
        $this->isDistributed = $isDistributed;

        return $this;
    }

    /**
     * Get isDistributed
     *
     * @return boolean
     */
    public function getIsDistributed()
    {
        return $this->isDistributed;
    }

    /**
     * Set sharedToken
     *
     * @param string $sharedToken
     *
     * @return Event
     */
    public function setSharedToken($sharedToken)
    {
        $this->sharedToken = $sharedToken;

        return $this;
    }

    /**
     * Get sharedToken
     *
     * @return string
     */
    public function getSharedToken()
    {
        return $this->sharedToken;
    }

    /**
     * @ORM\PrePersist
     *
     */
    public function createToken(){
        return ($this->setToken(md5(time().rand(0,999999))));
    }


    /**
     * @ORM\PrePersist
     *
     */
    public function createSharedToken(){
        return ($this->setSharedToken(md5(time().rand(0,999999))));
    }

}
