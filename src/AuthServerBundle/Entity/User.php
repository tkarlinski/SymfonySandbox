<?php


/**
 * @author    Tomasz Karliński <karlinski.tomasz@gmail.com>
 * @copyright 2017 tkarlinski
 * @since     2017-08-03
 * @version   Release: $Id$
 *
 * @ORM\Entity(name="public.user")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="text")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $login;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $password;
}