<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rpjrol
 *
 * @ORM\Table(name="rPjRol", indexes={@ORM\Index(name="FK_rPjRol_Pj", columns={"idPj"}), @ORM\Index(name="FK_rPjRol_Rol", columns={"idRol"})})
 * @ORM\Entity
 */
class Rpjrol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRPjRol", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrpjrol;

    /**
     * @var \AppBundle\Entity\Rol
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRol", referencedColumnName="idRol")
     * })
     */
    private $idrol;

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

