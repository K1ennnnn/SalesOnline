<?php

namespace App\Service\Product;

use App\Repositories\Product\ProductRepositoryInterface;
use App\Service\BaseService;

class ProductService extends BaseService implements ProductServiceInterface
{
    public $repository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->repository = $productRepository;
    }

    public function find($id)
    {
        $product = $this->repository->find($id);
        $avgRating = 0;

        if ($product->productCommets !== null) {
            $sumRating = array_sum(array_column($product->productCommets->toArray(), 'rating'));
            $countRating = count($product->productCommets);

            if ($countRating != 0) {
                $avgRating = $sumRating / $countRating;
            }
        }

        $product->avgRating = $avgRating;

        return $product;
    }
}
