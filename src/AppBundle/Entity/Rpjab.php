<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rpjab
 *
 * @ORM\Table(name="rPjAb", indexes={@ORM\Index(name="FK_rPjAb_Pj", columns={"idPj"}), @ORM\Index(name="FK_rPjAb_Ability", columns={"idAbility"})})
 * @ORM\Entity
 */
class Rpjab
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="isAvailable", type="boolean", nullable=false)
     */
    private $isavailable;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRPjAb", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrpjab;

    /**
     * @var \AppBundle\Entity\Ability
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ability")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAbility", referencedColumnName="idAbility")
     * })
     */
    private $idability;

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

