<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employees
 *
 * @ORM\Table(name="employees", indexes={@ORM\Index(name="FK_Services", columns={"IdService"})})
 * @ORM\Entity
 */
class Employees
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="First_Name", type="string", length=255, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="Last_Name", type="string", length=255, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="Cin", type="string", length=255, nullable=false)
     */
    private $cin;

    /**
     * @var integer
     *
     * @ORM\Column(name="GiveAccess", type="integer", nullable=false)
     */
    private $giveaccess;

    /**
     * @var integer
     *
     * @ORM\Column(name="Payment", type="integer", nullable=false)
     */
    private $payment;

    /**
     * @var integer
     *
     * @ORM\Column(name="Transfert", type="integer", nullable=false)
     */
    private $transfert;

    /**
     * @var integer
     *
     * @ORM\Column(name="VerifyAccess", type="integer", nullable=false)
     */
    private $verifyaccess;

    /**
     * @var \Services
     *
     * @ORM\ManyToOne(targetEntity="Services")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdService", referencedColumnName="Id")
     * })
     */
    private $idservice;


}

