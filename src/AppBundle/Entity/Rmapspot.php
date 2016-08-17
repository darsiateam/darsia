<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rmapspot
 *
 * @ORM\Table(name="rMapSpot", indexes={@ORM\Index(name="FK_rMapSpot_Map", columns={"idMap"}), @ORM\Index(name="FK_rMapSpot_Spot", columns={"idSpot"})})
 * @ORM\Entity
 */
class Rmapspot
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRMapSpot", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrmapspot;

    /**
     * @var \AppBundle\Entity\Spot
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Spot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSpot", referencedColumnName="idSpot")
     * })
     */
    private $idspot;

    /**
     * @var \AppBundle\Entity\Map
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Map")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMap", referencedColumnName="idMap")
     * })
     */
    private $idmap;


}

