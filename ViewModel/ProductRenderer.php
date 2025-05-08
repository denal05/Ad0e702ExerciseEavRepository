<?php
declare(strict_types=1);

namespace Denal05\Ad0e702ExerciseEavRepository\ViewModel;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class ProductRenderer implements ArgumentInterface
{
    /** @var RequestInterface */
    private $request;

    /** @var ProductRepositoryInterface */
    private $productRepository;

    /** @var SearchCriteriaBuilder */
    private $searchCriteriaBuilder;

    public function __construct(
        RequestInterface $request,
        ProductRepositoryInterface $productRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder
    ) {
        $this->request = $request;
        $this->productRepository = $productRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->setPage($this->getPage());
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

    public function getPage(): int
    {
        try {
            $page = (int)$this->request->getParam('p');
            if (!$page) {
                return 1;
            } else {
                return $page;
            }
        } catch (\Exception $exception) {
            return 1;
        }
    }

    public function setPage(int $page): void
    {
        try {
            if (!$page) {
                $this->searchCriteriaBuilder->setCurrentPage(1);
            } else {
                $this->searchCriteriaBuilder->setCurrentPage($page);
            }
        } catch (\Exception $exception) {
            // do nothing
        }
    }
}
