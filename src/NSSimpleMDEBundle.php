<?php

namespace NS\SimpleMDEBundle;

use NS\SimpleMDEBundle\DependencyInjection\CompilerPass\ResourcesCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class NSSimpleMDEBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new ResourcesCompilerPass());
    }
}
