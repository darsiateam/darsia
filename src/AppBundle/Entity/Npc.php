<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Npc
 *
 * @ORM\Table(name="NPC")
 * @ORM\Entity
 */
class Npc
{
    /**
     * @var string
     *
     * @ORM\Column(name="sex", type="string", length=1, nullable=false)
     */
    private $sex;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=25, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=25, nullable=false)
     */
    private $img;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isTrader", type="boolean", nullable=false)
     */
    private $istrader;

    /**
     * @var integer
     *
     * @ORM\Column(name="idNPC", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnpc;


}

