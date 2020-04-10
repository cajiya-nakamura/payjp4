<?php


namespace Plugin\PayJP\Form\Extension;


use Eccube\Form\Type\Shopping\OrderType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class CreditCardExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if($options['skip_add_form']) {
            return;
        }

        $builder
            ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event){
                $form = $event->getForm();

                $form->add('payjp_token', HiddenType::class, [
                    'required' => false,
                    'mapped' => true
                ]);
            });

        $builder
            ->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event){

            });
    }

    /**
     * @inheritDoc
     */
    public function getExtendedType()
    {
        // TODO: Implement getExtendedType() method.
        return OrderType::class;
    }
}