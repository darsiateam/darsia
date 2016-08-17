<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rrolspec
 *
 * @ORM\Table(name="rRolSpec", indexes={@ORM\Index(name="FK_rRolSpec_Rol", columns={"idRol"}), @ORM\Index(name="FK_rRolSpec_Speciality", columns={"idSpeciality"})})
 * @ORM\Entity
 */
class Rrolspec
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRRolSpec", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrrolspec;

    /**
     * @var \AppBundle\Entity\Speciality
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Speciality")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSpeciality", referencedColumnName="idSpeciality")
     * })
     */
    private $idspeciality;

    /**
     * @var \AppBundle\Entity\Rol
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRol", referencedColumnName="idRol")
     * })
     */
    private $idrol;


}

