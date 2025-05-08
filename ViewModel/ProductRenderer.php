<?php
declare(strict_types=1);

namespace Denal05\Ad0e702ExerciseEavRepository\ViewModel;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class ProductRenderer implements ArgumentInterface
{
    /** @var ProductRepositoryInterface */
    public $productRepository;

    /** @var SearchCriteriaBuilder */
    public $searchCriteriaBuilder;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder
    ) {
        $this->productRepository = $productRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
    }
    public function getProductRepository(): ? \Magento\Catalog\Api\ProductRepositoryInterface
    {
        try {
            return $this->productRepository;
        } catch (\Exception $exception) {
            return null;
        }
    }

    public function getSearchCriteriaBuilder(): ? \Magento\Framework\Api\SearchCriteriaBuilder
    {
        try {
            return $this->searchCriteriaBuilder;
        } catch (\Exception $exception) {
            return null;
        }
    }
}
