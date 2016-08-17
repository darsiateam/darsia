<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rnpcspot
 *
 * @ORM\Table(name="rNPCSpot", indexes={@ORM\Index(name="FK_rNPCSpot_NPC", columns={"idNPC"}), @ORM\Index(name="FK_rNPCSpot_Spot", columns={"idSpot"})})
 * @ORM\Entity
 */
class Rnpcspot
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRNPCSpot", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrnpcspot;

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
     * @var \AppBundle\Entity\Npc
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Npc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idNPC", referencedColumnName="idNPC")
     * })
     */
    private $idnpc;


}

