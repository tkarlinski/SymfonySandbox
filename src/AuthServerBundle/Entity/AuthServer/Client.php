<?php
namespace AuthServerBundle\ApiBundle\Entity\AuthServer;

use FOS\OAuthServerBundle\Entity\Client as BaseClient;
use Doctrine\ORM\Mapping as ORM;

/**
 * @author    Tomasz Karliński <tomasz.karlinski@invicta.pl>
 * @copyright 2017 tkarlinski
 * @since     2017-08-03
 * @version   Release: $Id$
 *
 * @ORM\Entity(name="auth_server.client")
 */
class Client extends BaseClient
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="name", type="string")
     */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}