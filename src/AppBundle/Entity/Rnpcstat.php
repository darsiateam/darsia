<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rnpcstat
 *
 * @ORM\Table(name="rNPCStat", indexes={@ORM\Index(name="FK_rNPCStat_NPC", columns={"idNPC"}), @ORM\Index(name="FK_rNPCStat_Stat", columns={"idStat"})})
 * @ORM\Entity
 */
class Rnpcstat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRNPCStat", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrnpcstat;

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
     * @var \AppBundle\Entity\Npc
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Npc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idNPC", referencedColumnName="idNPC")
     * })
     */
    private $idnpc;


}

