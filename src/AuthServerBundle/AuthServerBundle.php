<?php

namespace AuthServerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AuthServerBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSOAuthServerBundle';
    }
}
