<?php


namespace Pyz\Zed\HelloSpryker\Business;

use Pyz\Zed\HelloSpryker\Business\Reader\StringReader;
use Pyz\Zed\HelloSpryker\Business\Reader\StringReaderInterface;
use Pyz\Zed\HelloSpryker\Business\Writer\StringWriter;
use Pyz\Zed\HelloSpryker\Business\Writer\StringWriterInterface;
use Pyz\Zed\StringReverser\Business\StringReverserFacade;
use Pyz\Zed\StringReverser\Business\StringReverserFacadeInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use Pyz\Zed\HelloSpryker\HelloSprykerDependencyProvider;
use Spryker\Zed\Kernel\Exception\Container\ContainerKeyNotFoundException;

/**
 * @method \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerEntityManagerInterface getEntityManager()
 * @method \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerRepositoryInterface getRepository()
 */
class HelloSprykerBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return StringReaderInterface
     */
    public function createStringReader(): StringReaderInterface
    {
        return new StringReader($this->getRepository());
    }

    /**
     * @return StringWriterInterface
     */
    public function createStringWriter(): StringWriterInterface
    {
        return new StringWriter($this->getEntityManager());
    }

    /**
     * @return StringReverserFacade
     * @throws ContainerKeyNotFoundException
     */
    public function getStringReverserFacade(): StringReverserFacadeInterface
    {
        return $this->getProvidedDependency(HelloSprykerDependencyProvider::FACADE_STRING_REVERSER);
    }
}
