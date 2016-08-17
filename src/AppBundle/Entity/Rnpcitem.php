<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rnpcitem
 *
 * @ORM\Table(name="rNPCItem", indexes={@ORM\Index(name="FK_rNPCItem_NPC", columns={"idNPC"}), @ORM\Index(name="FK_rNPCItem_Item", columns={"idItem"})})
 * @ORM\Entity
 */
class Rnpcitem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRNPCItem", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrnpcitem;

    /**
     * @var \AppBundle\Entity\Item
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idItem", referencedColumnName="idItem")
     * })
     */
    private $iditem;

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

