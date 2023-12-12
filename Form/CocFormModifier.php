<?php declare(strict_types=1);

namespace Yireo\HyvaCheckoutCoc\Form;

use Hyva\Checkout\Model\Form\EntityFormInterface;

class CocFormModifier
{
    public function execute(EntityFormInterface $form)
    {
        $cocField = $form->getField('coc');
        if (empty($cocField)) {
            return;
        }

        $cocField->setData('class_element', ["var(--field-coc-element)"]);
        $cocField->setData('class_wrapper', ["var(--field-coc-wrapper)"]);
        $cocField->setAttribute('placeholder', 'Chamber of Commerce number');
    }
}
