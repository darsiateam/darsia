<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Npcdialogue
 *
 * @ORM\Table(name="NPCDialogue")
 * @ORM\Entity
 */
class Npcdialogue
{
    /**
     * @var string
     *
     * @ORM\Column(name="dialogue", type="text", length=65535, nullable=false)
     */
    private $dialogue;

    /**
     * @var \AppBundle\Entity\Npc
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Npc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idNPCDialogue", referencedColumnName="idNPC")
     * })
     */
    private $idnpcdialogue;


}

