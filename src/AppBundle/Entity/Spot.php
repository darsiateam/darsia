<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Spot
 *
 * @ORM\Table(name="Spot")
 * @ORM\Entity
 */
class Spot
{
    /**
     * @var integer
     *
     * @ORM\Column(name="X", type="integer", nullable=false)
     */
    private $x;

    /**
     * @var integer
     *
     * @ORM\Column(name="Y", type="integer", nullable=false)
     */
    private $y;

    /**
     * @var boolean
     *
     * @ORM\Column(name="N", type="boolean", nullable=true)
     */
    private $n = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="S", type="boolean", nullable=true)
     */
    private $s = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="E", type="boolean", nullable=true)
     */
    private $e = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="W", type="boolean", nullable=true)
     */
    private $w = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="NW", type="boolean", nullable=true)
     */
    private $nw = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="NE", type="boolean", nullable=true)
     */
    private $ne = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="SW", type="boolean", nullable=true)
     */
    private $sw = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="SE", type="boolean", nullable=true)
     */
    private $se = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idSpot", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idspot;


}

