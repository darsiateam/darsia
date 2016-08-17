<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rpjrace
 *
 * @ORM\Table(name="rPjRace", indexes={@ORM\Index(name="FK_rPjRace_Pj", columns={"idPj"}), @ORM\Index(name="FK_rPjRace_Race", columns={"idRace"})})
 * @ORM\Entity
 */
class Rpjrace
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRPjRace", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrpjrace;

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
     * @var \AppBundle\Entity\Pj
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pj")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPj", referencedColumnName="idPj")
     * })
     */
    private $idpj;


}

