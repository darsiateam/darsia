<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rpjstat
 *
 * @ORM\Table(name="rPjStat", indexes={@ORM\Index(name="FK_rPjStat_Pj", columns={"idPj"}), @ORM\Index(name="FK_rPjStat_Stat", columns={"idStat"})})
 * @ORM\Entity
 */
class Rpjstat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRPjStat", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrpjstat;

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
     * @var \AppBundle\Entity\Pj
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pj")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPj", referencedColumnName="idPj")
     * })
     */
    private $idpj;


}

