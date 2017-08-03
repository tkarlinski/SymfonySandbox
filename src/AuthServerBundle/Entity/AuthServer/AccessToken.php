<?php

namespace AuthServerBundle\ApiBundle\Entity\AuthServer;
use FOS\OAuthServerBundle\Entity\AccessToken as BaseAccessToken;
use Doctrine\ORM\Mapping as ORM;

/**
 * @author    Tomasz Karliński <tomasz.karlinski@invicta.pl>
 * @copyright 2017 INVICTA
 * @since     2017-08-03
 * @version   Release: $Id$
 *
 * @ORM\Entity(name="auth_server.access_token")
 */
class AccessToken extends BaseAccessToken
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $client;

    /**
     * @ORM\ManyToOne(targetEntity="Your\Own\Entity\User")
     */
    protected $user;
}