<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Raccountpj
 *
 * @ORM\Table(name="rAccountPj", indexes={@ORM\Index(name="FK_rAccountPj_Account", columns={"idAccount"}), @ORM\Index(name="FK_rAccountPj_Pj", columns={"idPj"})})
 * @ORM\Entity
 */
class Raccountpj
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRAccountPj", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idraccountpj;

    /**
     * @var \AppBundle\Entity\Pj
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pj")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPj", referencedColumnName="idPj")
     * })
     */
    private $idpj;

    /**
     * @var \AppBundle\Entity\Account
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Account")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAccount", referencedColumnName="idAccount")
     * })
     */
    private $idaccount;


}

