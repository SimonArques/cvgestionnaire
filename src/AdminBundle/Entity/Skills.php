<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skills
 */
class Skills
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $skType;

    /**
     * @var string
     */
    private $skResume;


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
     * Set skType
     *
     * @param string $skType
     * @return Skills
     */
    public function setSkType($skType)
    {
        $this->skType = $skType;

        return $this;
    }

    /**
     * Get skType
     *
     * @return string 
     */
    public function getSkType()
    {
        return $this->skType;
    }

    /**
     * Set skResume
     *
     * @param string $skResume
     * @return Skills
     */
    public function setSkResume($skResume)
    {
        $this->skResume = $skResume;

        return $this;
    }

    /**
     * Get skResume
     *
     * @return string 
     */
    public function getSkResume()
    {
        return $this->skResume;
    }
}
