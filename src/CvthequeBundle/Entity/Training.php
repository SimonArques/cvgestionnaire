<?php

namespace CvthequeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="training")
 */
class Training
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $trtype;

    /**
     * @ORM\Column(type="string")
     */
    private $trResume;

    /**
     * @ORM\Column(type="string")
     */
    private $trDebut;

    /**
     * @ORM\Column(type="string")
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
     * @param string $trDebut
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
     * @return string
     */
    public function getTrDebut()
    {
        return $this->trDebut;
    }

    /**
     * Set trEnd
     *
     * @param string $trEnd
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
     * @return string 
     */
    public function getTrEnd()
    {
        return $this->trEnd;
    }
}
