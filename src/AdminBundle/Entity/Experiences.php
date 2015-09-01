<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experiences
 */
class Experiences
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $exType;

    /**
     * @var string
     */
    private $exResume;

    /**
     * @var \DateTime
     */
    private $exDebut;

    /**
     * @var \DateTime
     */
    private $exEnd;


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
     * Set exType
     *
     * @param string $exType
     * @return Experiences
     */
    public function setExType($exType)
    {
        $this->exType = $exType;

        return $this;
    }

    /**
     * Get exType
     *
     * @return string 
     */
    public function getExType()
    {
        return $this->exType;
    }

    /**
     * Set exResume
     *
     * @param string $exResume
     * @return Experiences
     */
    public function setExResume($exResume)
    {
        $this->exResume = $exResume;

        return $this;
    }

    /**
     * Get exResume
     *
     * @return string 
     */
    public function getExResume()
    {
        return $this->exResume;
    }

    /**
     * Set exDebut
     *
     * @param \DateTime $exDebut
     * @return Experiences
     */
    public function setExDebut($exDebut)
    {
        $this->exDebut = $exDebut;

        return $this;
    }

    /**
     * Get exDebut
     *
     * @return \DateTime 
     */
    public function getExDebut()
    {
        return $this->exDebut;
    }

    /**
     * Set exEnd
     *
     * @param \DateTime $exEnd
     * @return Experiences
     */
    public function setExEnd($exEnd)
    {
        $this->exEnd = $exEnd;

        return $this;
    }

    /**
     * Get exEnd
     *
     * @return \DateTime 
     */
    public function getExEnd()
    {
        return $this->exEnd;
    }
}
