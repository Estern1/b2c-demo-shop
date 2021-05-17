<?php


namespace Pyz\Zed\HelloSpryker\Business;

use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use Pyz\Zed\HelloSpryker\Business\Reverser\StringReverser;
use Pyz\Zed\HelloSpryker\Business\Reverser\StringReverserInterface;

class HelloSprykerBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return StringReverserInterface
     */
    public function createStringReverser(): StringReverserInterface
    {
        return new StringReverser();
    }
}
