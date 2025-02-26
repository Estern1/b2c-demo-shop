<?php


namespace Pyz\Client\HelloSpryker;

use Pyz\Client\HelloSpryker\Zed\HelloSprykerZedStub;
use Pyz\Client\HelloSpryker\Zed\HelloSprykerZedStubInterface;
use Spryker\Client\Kernel\AbstractFactory;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;

class HelloSprykerFactory extends AbstractFactory
{
    /**
     * @return HelloSprykerZedStubInterface
     */
    public function createHelloSprykerZedStub(): HelloSprykerZedStubInterface
    {
        return new HelloSprykerZedStub($this->getZedRequestClient());
    }

    /**
     * @return ZedRequestClientInterface
     */
    protected function getZedRequestClient(): ZedRequestClientInterface
    {
        return $this->getProvidedDependency(HelloSprykerDependencyProvider::CLIENT_ZED_REQUEST);
    }
}
