<?php

namespace App\SandboxBundle\Util;

/**
 * @author    Tomasz Karliński <karlinski.tomasz@gmail.com>
 * @copyright 2017 tkarlinski
 * @package   App\SandboxBundle\Util
 * @since     2017-11-09
 * @version   Release: $Id$
 */
class Calculator
{
    public function add(int $a, int $b) : int
    {
        return $a + $b;
    }
}