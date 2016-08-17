<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rinv
 *
 * @ORM\Table(name="rInv", indexes={@ORM\Index(name="FK_rInv_Pj", columns={"idPj"}), @ORM\Index(name="FK_rInv_Item", columns={"idItem"})})
 * @ORM\Entity
 */
class Rinv
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="isEquip", type="boolean", nullable=false)
     */
    private $isequip;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRInv", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrinv;

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
     * @var \AppBundle\Entity\Pj
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pj")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPj", referencedColumnName="idPj")
     * })
     */
    private $idpj;


}

