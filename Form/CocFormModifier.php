<?php declare(strict_types=1);

namespace Yireo\HyvaCheckoutCoc\Form;

use Hyva\Checkout\Model\Form\EntityFormInterface;

class CocFormModifier
{
    public function execute(EntityFormInterface $form)
    {
        $cocField = $form->getField('coc');
        //$cocField->setData('class_element', ["bg-[#ffcc00]"]);
        $cocField->setData('class_element', ["bg-orange-200"]);
        $cocField->setData('class_wrapper', ["relative before:content-['Hello_World'] before:absolute before:top-0 before:left-0"]);

    }
}
