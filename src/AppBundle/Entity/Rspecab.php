<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rspecab
 *
 * @ORM\Table(name="rSpecAb", indexes={@ORM\Index(name="FK_rSpecAb_Speciality", columns={"idSpeciality"}), @ORM\Index(name="FK_rSpecAb_Ability", columns={"idAbility"})})
 * @ORM\Entity
 */
class Rspecab
{
    /**
     * @var string
     *
     * @ORM\Column(name="branch", type="string", length=25, nullable=false)
     */
    private $branch;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRSpecAb", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrspecab;

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
     * @var \AppBundle\Entity\Speciality
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Speciality")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSpeciality", referencedColumnName="idSpeciality")
     * })
     */
    private $idspeciality;


}

