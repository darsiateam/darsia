<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ability
 *
 * @ORM\Table(name="Ability")
 * @ORM\Entity
 */
class Ability
{
    /**
     * @var integer
     *
     * @ORM\Column(name="lvl", type="integer", nullable=false)
     */
    private $lvl;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=25, nullable=false)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isAvtive", type="boolean", nullable=false)
     */
    private $isavtive;

    /**
     * @var integer
     *
     * @ORM\Column(name="lvlReq", type="integer", nullable=false)
     */
    private $lvlreq;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=25, nullable=false)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="descrip", type="text", length=65535, nullable=false)
     */
    private $descrip;

    /**
     * @var integer
     *
     * @ORM\Column(name="intReq", type="integer", nullable=false)
     */
    private $intreq;

    /**
     * @var integer
     *
     * @ORM\Column(name="lvlMax", type="integer", nullable=false)
     */
    private $lvlmax;

    /**
     * @var integer
     *
     * @ORM\Column(name="idAbility", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idability;


}

