<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 01/11/16
 * Time: 2:18 PM
 */

namespace NS\SimpleMDEBundle\Form\Types;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class MarkdownEditorType extends AbstractType
{
    public function getBlockPrefix()
    {
        return 'simplemde_editor';
    }

    public function getParent()
    {
        return TextareaType::class;
    }
}
