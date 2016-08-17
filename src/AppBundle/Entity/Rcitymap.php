<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rcitymap
 *
 * @ORM\Table(name="rCityMap", indexes={@ORM\Index(name="FK_rCityMap_Map", columns={"idMap"}), @ORM\Index(name="FK_rCityMap_City", columns={"idCity"})})
 * @ORM\Entity
 */
class Rcitymap
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRCityMap", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrcitymap;

    /**
     * @var \AppBundle\Entity\City
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\City")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCity", referencedColumnName="idCity")
     * })
     */
    private $idcity;

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

