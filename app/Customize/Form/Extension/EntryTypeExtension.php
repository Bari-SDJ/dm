<?php

namespace Customize\Form\Extension;

use Eccube\Form\Type\Front\EntryType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class EntryTypeExtension extends AbstractTypeExtension
{
    public static function getExtendedTypes(): iterable
    {
        return [EntryType::class];
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('note', TextareaType::class, [
            'label' => '見積書/インボイス/契約書に表示のため',
            'required' => false,
        ]);
    }
}
