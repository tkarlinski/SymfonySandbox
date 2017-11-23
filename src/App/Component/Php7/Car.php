<?php

namespace App\Component\Php7;

/**
 * @author    Tomasz Karliński <karlinski.tomasz@gmail.com>
 * @copyright 2017 tkarlinski
 * @package   App\Component\Php7
 * @since     2017-11-02
 * @version   Release: $Id$
 */
class Car
{
    /** @var string */
    private $type;

    /**
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType() : int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type) : void
    {
        $this->type = $type;
    }
}