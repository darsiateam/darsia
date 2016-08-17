<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rracestat
 *
 * @ORM\Table(name="rRaceStat", indexes={@ORM\Index(name="FK_rRaceStat_Stat", columns={"idStat"}), @ORM\Index(name="FK_rRaceStat_Race", columns={"idRace"})})
 * @ORM\Entity
 */
class Rracestat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRRaceStat", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrracestat;

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
     * @var \AppBundle\Entity\Stat
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Stat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idStat", referencedColumnName="idStat")
     * })
     */
    private $idstat;


}

