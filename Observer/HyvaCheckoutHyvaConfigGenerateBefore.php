<?php declare(strict_types=1);

namespace Yireo\HyvaCheckoutCoc\Observer;

use Magento\Framework\Component\ComponentRegistrar;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class HyvaCheckoutHyvaConfigGenerateBefore implements ObserverInterface
{
    public function __construct(
        private ComponentRegistrar $componentRegistrar
    ) {
    }

    public function execute(Observer $observer)
    {
        $config = $observer->getData('config');
        $extensions = $config->hasData('extensions') ? $config->getData('extensions') : [];
        $moduleName = implode('_', array_slice(explode('\\', __CLASS__), 0, 2));
        $path = $this->componentRegistrar->getPath(ComponentRegistrar::MODULE, $moduleName);
        $extensions[] = ['src' => substr($path, strlen(BP) + 1)];
        $config->setData('extensions', $extensions);
    }
}