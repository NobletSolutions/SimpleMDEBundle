<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 01/11/16
 * Time: 2:40 PM
 */

namespace NS\SimpleMDEBundle\DependencyInjection\CompilerPass;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ResourcesCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if ($container->hasParameter($parameter = 'twig.form.resources')) {
            $container->setParameter(
                $parameter,
                array_merge(
                    array('NSSimpleMDEBundle:Form:fields.html.twig'),
                    $container->getParameter($parameter)
                )
            );
        }
    }
}
