<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roleqitemtype
 *
 * @ORM\Table(name="RolEqItemType")
 * @ORM\Entity
 */
class Roleqitemtype
{
    /**
     * @var integer
     *
     * @ORM\Column(name="eqItemType", type="integer", nullable=false)
     */
    private $eqitemtype;

    /**
     * @var \AppBundle\Entity\Rol
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEqItemType", referencedColumnName="idRol")
     * })
     */
    private $ideqitemtype;


}

