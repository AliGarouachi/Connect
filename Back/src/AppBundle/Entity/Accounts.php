<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accounts
 *
 * @ORM\Table(name="accounts")
 * @ORM\Entity
 */
class Accounts
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
     * @var integer
     *
     * @ORM\Column(name="Amount", type="integer", nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="QrString", type="string", length=500, nullable=false)
     */
    private $qrstring;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumberAccess", type="integer", nullable=false)
     */
    private $numberaccess;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ExpirationDate", type="datetime", nullable=false)
     */
    private $expirationdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ReceivingDate", type="datetime", nullable=false)
     */
    private $receivingdate;


}

