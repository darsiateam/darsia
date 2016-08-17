<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pj
 *
 * @ORM\Table(name="Pj")
 * @ORM\Entity
 */
class Pj
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=25, nullable=false)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sex", type="boolean", nullable=false)
     */
    private $sex;

    /**
     * @var integer
     *
     * @ORM\Column(name="lvl", type="integer", nullable=false)
     */
    private $lvl;

    /**
     * @var integer
     *
     * @ORM\Column(name="XP", type="integer", nullable=false)
     */
    private $xp;

    /**
     * @var integer
     *
     * @ORM\Column(name="honor", type="integer", nullable=false)
     */
    private $honor;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=250, nullable=false)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="intel", type="integer", nullable=false)
     */
    private $intel;

    /**
     * @var integer
     *
     * @ORM\Column(name="stren", type="integer", nullable=false)
     */
    private $stren;

    /**
     * @var integer
     *
     * @ORM\Column(name="destr", type="integer", nullable=false)
     */
    private $destr;

    /**
     * @var integer
     *
     * @ORM\Column(name="abPoint", type="integer", nullable=false)
     */
    private $abpoint;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPj", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpj;


}

