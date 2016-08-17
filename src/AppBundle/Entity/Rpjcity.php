<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rpjcity
 *
 * @ORM\Table(name="rPjCity", indexes={@ORM\Index(name="FK_rPjCity_Pj", columns={"idPj"}), @ORM\Index(name="FK_rPjCity_City", columns={"idCity"})})
 * @ORM\Entity
 */
class Rpjcity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRPjCity", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrpjcity;

    /**
     * @var \AppBundle\Entity\City
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\City")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCity", referencedColumnName="idCity")
     * })
     */
    private $idcity;

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

