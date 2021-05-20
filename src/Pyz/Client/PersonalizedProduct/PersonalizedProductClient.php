<?php


namespace Pyz\Client\PersonalizedProduct;

use Spryker\Client\Kernel\AbstractClient;
use Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException;

/**
 * @method \Pyz\Client\PersonalizedProduct\PersonalizedProductFactory getFactory()
 */
class PersonalizedProductClient extends AbstractClient implements PersonalizedProductClientInterface
{
    /**
     * @param int $limit
     *
     * @return array
     * @throws ContainerKeyNotFoundException
     */
    public function getPersonalizedProducts(int $limit)
    {
        $searchQuery = $this
            ->getFactory()
            ->createPersonalizedProductsQueryPlugin($limit);

        $searchQueryFormatters = $this
            ->getFactory()
            ->getSearchQueryFormatters();

        $searchResult = $this->getFactory()
            ->getSearchClient()
            ->search(
                $searchQuery,
                $searchQueryFormatters
            );

        return $searchResult;
    }
}
