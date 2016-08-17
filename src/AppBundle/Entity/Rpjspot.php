<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rpjspot
 *
 * @ORM\Table(name="rPjSpot", indexes={@ORM\Index(name="FK_rPjSpot_Pj", columns={"idPj"}), @ORM\Index(name="FK_rPjSpot_Spot", columns={"idSpot"})})
 * @ORM\Entity
 */
class Rpjspot
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRPjSpot", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrpjspot;

    /**
     * @var \AppBundle\Entity\Spot
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Spot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSpot", referencedColumnName="idSpot")
     * })
     */
    private $idspot;

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

