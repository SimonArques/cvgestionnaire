<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Training
 */
class Training
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $trtype;

    /**
     * @var string
     */
    private $trResume;

    /**
     * @var \DateTime
     */
    private $trDebut;

    /**
     * @var \DateTime
     */
    private $trEnd;


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
     * Set trtype
     *
     * @param string $trtype
     * @return Training
     */
    public function setTrtype($trtype)
    {
        $this->trtype = $trtype;

        return $this;
    }

    /**
     * Get trtype
     *
     * @return string 
     */
    public function getTrtype()
    {
        return $this->trtype;
    }

    /**
     * Set trResume
     *
     * @param string $trResume
     * @return Training
     */
    public function setTrResume($trResume)
    {
        $this->trResume = $trResume;

        return $this;
    }

    /**
     * Get trResume
     *
     * @return string 
     */
    public function getTrResume()
    {
        return $this->trResume;
    }

    /**
     * Set trDebut
     *
     * @param \DateTime $trDebut
     * @return Training
     */
    public function setTrDebut($trDebut)
    {
        $this->trDebut = $trDebut;

        return $this;
    }

    /**
     * Get trDebut
     *
     * @return \DateTime 
     */
    public function getTrDebut()
    {
        return $this->trDebut;
    }

    /**
     * Set trEnd
     *
     * @param \DateTime $trEnd
     * @return Training
     */
    public function setTrEnd($trEnd)
    {
        $this->trEnd = $trEnd;

        return $this;
    }

    /**
     * Get trEnd
     *
     * @return \DateTime 
     */
    public function getTrEnd()
    {
        return $this->trEnd;
    }
}
