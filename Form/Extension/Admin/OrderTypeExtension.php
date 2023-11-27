<?php

namespace Plugin\payjp4\Form\Extension\Admin;

use Eccube\Form\Type\Admin\OrderType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class OrderTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('payjpChargeId', TextType::class, [
            'label' => 'PAY.JP 課金ID',
            'required' => false,
            'attr' => [
                'readonly' => true
            ],
            'eccube_form_options' => [
                'auto_render' => true,
            ]
        ]);
    }

    public function getExtendedType()
    {
        return OrderType::class;
    }
    public static function getExtendedTypes(): iterable
    {
        return [OrderType::class];
    }
}
