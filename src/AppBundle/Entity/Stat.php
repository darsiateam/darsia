<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stat
 *
 * @ORM\Table(name="Stat")
 * @ORM\Entity
 */
class Stat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="AD", type="integer", nullable=false)
     */
    private $ad;

    /**
     * @var integer
     *
     * @ORM\Column(name="AP", type="integer", nullable=false)
     */
    private $ap;

    /**
     * @var float
     *
     * @ORM\Column(name="Dge", type="float", precision=4, scale=2, nullable=false)
     */
    private $dge;

    /**
     * @var integer
     *
     * @ORM\Column(name="HP", type="integer", nullable=false)
     */
    private $hp;

    /**
     * @var integer
     *
     * @ORM\Column(name="MP", type="integer", nullable=false)
     */
    private $mp;

    /**
     * @var integer
     *
     * @ORM\Column(name="MR", type="integer", nullable=false)
     */
    private $mr;

    /**
     * @var integer
     *
     * @ORM\Column(name="DR", type="integer", nullable=false)
     */
    private $dr;

    /**
     * @var float
     *
     * @ORM\Column(name="AtS", type="float", precision=4, scale=2, nullable=false)
     */
    private $ats;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="integer", nullable=false)
     */
    private $weight;

    /**
     * @var float
     *
     * @ORM\Column(name="crit", type="float", precision=4, scale=2, nullable=false)
     */
    private $crit;

    /**
     * @var float
     *
     * @ORM\Column(name="critical", type="float", precision=4, scale=2, nullable=false)
     */
    private $critical;

    /**
     * @var float
     *
     * @ORM\Column(name="MPReg", type="float", precision=4, scale=2, nullable=false)
     */
    private $mpreg;

    /**
     * @var float
     *
     * @ORM\Column(name="HPReg", type="float", precision=4, scale=2, nullable=false)
     */
    private $hpreg;

    /**
     * @var integer
     *
     * @ORM\Column(name="charm", type="integer", nullable=false)
     */
    private $charm;

    /**
     * @var float
     *
     * @ORM\Column(name="reflect", type="float", precision=4, scale=2, nullable=false)
     */
    private $reflect;

    /**
     * @var float
     *
     * @ORM\Column(name="stun", type="float", precision=4, scale=2, nullable=false)
     */
    private $stun;

    /**
     * @var float
     *
     * @ORM\Column(name="sky", type="float", precision=4, scale=2, nullable=false)
     */
    private $sky;

    /**
     * @var float
     *
     * @ORM\Column(name="ocean", type="float", precision=4, scale=2, nullable=false)
     */
    private $ocean;

    /**
     * @var float
     *
     * @ORM\Column(name="continent", type="float", precision=4, scale=2, nullable=false)
     */
    private $continent;

    /**
     * @var float
     *
     * @ORM\Column(name="MS", type="float", precision=4, scale=2, nullable=false)
     */
    private $ms;

    /**
     * @var float
     *
     * @ORM\Column(name="LS", type="float", precision=4, scale=2, nullable=false)
     */
    private $ls;

    /**
     * @var float
     *
     * @ORM\Column(name="poison", type="float", precision=4, scale=2, nullable=false)
     */
    private $poison;

    /**
     * @var float
     *
     * @ORM\Column(name="resSky", type="float", precision=4, scale=2, nullable=false)
     */
    private $ressky;

    /**
     * @var float
     *
     * @ORM\Column(name="resOcean", type="float", precision=4, scale=2, nullable=false)
     */
    private $resocean;

    /**
     * @var float
     *
     * @ORM\Column(name="resContinent", type="float", precision=4, scale=2, nullable=false)
     */
    private $rescontinent;

    /**
     * @var float
     *
     * @ORM\Column(name="resStun", type="float", precision=4, scale=2, nullable=false)
     */
    private $resstun;

    /**
     * @var float
     *
     * @ORM\Column(name="resPoison", type="float", precision=4, scale=2, nullable=false)
     */
    private $respoison;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStat", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstat;


}

