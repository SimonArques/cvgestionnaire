<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hobbies
 */
class Hobbies
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $hoType;


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
     * Set hoType
     *
     * @param string $hoType
     * @return Hobbies
     */
    public function setHoType($hoType)
    {
        $this->hoType = $hoType;

        return $this;
    }

    /**
     * Get hoType
     *
     * @return string 
     */
    public function getHoType()
    {
        return $this->hoType;
    }
}
