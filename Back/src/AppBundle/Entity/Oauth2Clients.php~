<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oauth2Clients
 *
 * @ORM\Table(name="oauth2_clients")
 * @ORM\Entity
 */
class Oauth2Clients
{
    /**
     * @var string
     *
     * @ORM\Column(name="random_id", type="string", length=255, nullable=false)
     */
    private $randomId;

    /**
     * @var array
     *
     * @ORM\Column(name="redirect_uris", type="array", nullable=false)
     */
    private $redirectUris;

    /**
     * @var string
     *
     * @ORM\Column(name="secret", type="string", length=255, nullable=false)
     */
    private $secret;

    /**
     * @var array
     *
     * @ORM\Column(name="allowed_grant_types", type="array", nullable=false)
     */
    private $allowedGrantTypes;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

