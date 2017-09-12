<?php

namespace App\SandboxBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

/**
 * @author    Tomasz Karliński <karlinski.tomasz@gmail.com>
 * @copyright 2017 tkarlinski
 * @package   App\SandboxBundle\DependencyInjection\Compiler
 * @since     2017-09-12
 * @version   Release: $Id$
 */
class OAuth2CompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $serviceId = 'oauth2.grant_type.client_credentials';
        if ($container->hasDefinition($serviceId)) {
            $definition = $container->getDefinition($serviceId);

            $definition->addArgument([
                'use_jwt_access_tokens' => true
            ]);

            $args = $definition->getArguments();
            $a = 1;
        }
    }
}