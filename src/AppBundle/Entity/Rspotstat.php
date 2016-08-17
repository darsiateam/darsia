<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rspotstat
 *
 * @ORM\Table(name="rSpotStat", indexes={@ORM\Index(name="FK_rSpotStat_Spot", columns={"idSpot"}), @ORM\Index(name="FK_rSpotStat_Stat", columns={"idStat"})})
 * @ORM\Entity
 */
class Rspotstat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRSpotStat", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrspotstat;

    /**
     * @var \AppBundle\Entity\Stat
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Stat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idStat", referencedColumnName="idStat")
     * })
     */
    private $idstat;

    /**
     * @var \AppBundle\Entity\Spot
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Spot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSpot", referencedColumnName="idSpot")
     * })
     */
    private $idspot;


}

