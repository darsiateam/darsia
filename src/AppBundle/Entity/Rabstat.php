<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rabstat
 *
 * @ORM\Table(name="rAbStat", indexes={@ORM\Index(name="FK_rAbStat_Ability", columns={"idAbility"}), @ORM\Index(name="FK_rAbStat_Stat", columns={"idStat"})})
 * @ORM\Entity
 */
class Rabstat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRAbStat", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrabstat;

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
     * @var \AppBundle\Entity\Ability
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ability")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAbility", referencedColumnName="idAbility")
     * })
     */
    private $idability;


}

