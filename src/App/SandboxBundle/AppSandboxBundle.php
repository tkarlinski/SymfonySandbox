<?php

namespace App\SandboxBundle;

use App\SandboxBundle\DependencyInjection\Compiler\OAuth2CompilerPass;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;


class AppSandboxBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new OAuth2CompilerPass());
    }
}
