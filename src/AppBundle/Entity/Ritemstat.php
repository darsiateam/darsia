<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ritemstat
 *
 * @ORM\Table(name="rItemStat", indexes={@ORM\Index(name="FK_rItemStat_Item", columns={"idItem"}), @ORM\Index(name="FK_rItemStat_Stat", columns={"idStat"})})
 * @ORM\Entity
 */
class Ritemstat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRItemStat", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idritemstat;

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
     * @var \AppBundle\Entity\Item
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idItem", referencedColumnName="idItem")
     * })
     */
    private $iditem;


}

