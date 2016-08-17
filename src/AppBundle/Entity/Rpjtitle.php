<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rpjtitle
 *
 * @ORM\Table(name="rPjTitle", indexes={@ORM\Index(name="FK_rPjTitle_Pj", columns={"idPj"}), @ORM\Index(name="FK_rPjTitle_Title", columns={"idTitle"})})
 * @ORM\Entity
 */
class Rpjtitle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRPjTitle", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrpjtitle;

    /**
     * @var \AppBundle\Entity\Title
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Title")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTitle", referencedColumnName="idTitle")
     * })
     */
    private $idtitle;

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

