<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table(name="City")
 * @ORM\Entity
 */
class City
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=25, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=25, nullable=false)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="history", type="text", length=65535, nullable=false)
     */
    private $history;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCity", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcity;


}

