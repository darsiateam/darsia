<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rracespec
 *
 * @ORM\Table(name="rRaceSpec", indexes={@ORM\Index(name="FK_rRaceSpec_Spec", columns={"idSpeciality"}), @ORM\Index(name="FK_rRaceSpec_Race", columns={"idRace"})})
 * @ORM\Entity
 */
class Rracespec
{
    /**
     * @var float
     *
     * @ORM\Column(name="fitness", type="float", precision=4, scale=2, nullable=false)
     */
    private $fitness;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRRaceSpec", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrracespec;

    /**
     * @var \AppBundle\Entity\Race
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Race")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRace", referencedColumnName="idRace")
     * })
     */
    private $idrace;

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

