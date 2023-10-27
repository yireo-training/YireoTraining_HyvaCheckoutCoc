<?php declare(strict_types=1);

namespace Yireo\HyvaCheckoutCoc\Form;

use Hyva\Checkout\Model\Form\EntityFormInterface;
use Hyva\Checkout\Model\Form\EntityFormModifierInterface;

class ShippingAddressFormModifier implements EntityFormModifierInterface
{
    public function __construct(
        private CocFormModifier $cocFormModifier
    ) {}

    public function apply(EntityFormInterface $form): EntityFormInterface
    {
        $form->registerModificationListener(
            'Yireo_HyvaCheckoutCoc::form:build',
            'form:init',
            [$this->cocFormModifier, 'execute']
        );

        return $form;
    }
}