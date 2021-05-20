<?php


namespace Pyz\Client\PersonalizedProduct;

use Pyz\Client\PersonalizedProduct\Plugin\Elasticsearch\Query\PersonalizedProductQueryPlugin;
use Spryker\Client\Kernel\AbstractFactory;
use Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException;
use Spryker\Client\Search\SearchClientInterface;

class PersonalizedProductFactory extends AbstractFactory
{
    /**
     * @param int $limit
     *
     * @return PersonalizedProductQueryPlugin
     */
    public function createPersonalizedProductsQueryPlugin(int $limit)
    {
        return new PersonalizedProductQueryPlugin($limit);
    }

    /**
     * @return array
     * @throws ContainerKeyNotFoundException
     */
    public function getSearchQueryFormatters()
    {
        return $this->getProvidedDependency(PersonalizedProductDependencyProvider::CATALOG_SEARCH_RESULT_FORMATTER_PLUGINS);
    }

    /**
     * @return SearchClientInterface
     * @throws ContainerKeyNotFoundException
     */
    public function getSearchClient()
    {
        return $this->getProvidedDependency(PersonalizedProductDependencyProvider::CLIENT_SEARCH);
    }
}
