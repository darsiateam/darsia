<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rspotmap
 *
 * @ORM\Table(name="rSpotMap", indexes={@ORM\Index(name="FK_rSpotMap_Map", columns={"idMap"}), @ORM\Index(name="FK_rSpotMap_Spot", columns={"idSpot"}), @ORM\Index(name="FK_rSpotMap_City", columns={"cityReq"}), @ORM\Index(name="FK_rSpotMap_NewMapSpot", columns={"idNewMapSpot"})})
 * @ORM\Entity
 */
class Rspotmap
{
    /**
     * @var integer
     *
     * @ORM\Column(name="lvlReq", type="integer", nullable=false)
     */
    private $lvlreq;

    /**
     * @var string
     *
     * @ORM\Column(name="doorName", type="string", length=25, nullable=false)
     */
    private $doorname;

    /**
     * @var integer
     *
     * @ORM\Column(name="titleReq", type="integer", nullable=true)
     */
    private $titlereq;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRSpotMap", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrspotmap;

    /**
     * @var \AppBundle\Entity\Spot
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Spot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idNewMapSpot", referencedColumnName="idSpot")
     * })
     */
    private $idnewmapspot;

    /**
     * @var \AppBundle\Entity\City
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\City")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cityReq", referencedColumnName="idCity")
     * })
     */
    private $cityreq;

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

