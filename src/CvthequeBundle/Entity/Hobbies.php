<?php

namespace CvthequeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="hobbies")
 */
class Hobbies {

     /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\generatedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * 
     */
    private $hoType;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set hoType
     *
     * @param string $hoType
     * @return Hobbies
     */
    public function setHoType($hoType) {
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
