<?php

declare(strict_types=1);

namespace Alfredo\Type\Model\Product\Type;

use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\Product\Type\Virtual;

class TheNewProduct extends Virtual
{
    /**
     * @param Product $product
     * @return void
     */
    public function deleteTypeSpecificData(Product $product)
    {
    }
}
