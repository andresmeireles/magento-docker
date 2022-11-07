<?php

declare(strict_types=1);

namespace Alfredo\Carlos\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface
{
    public function execute()
    {
        echo 'ovo';
        die;
    }
}
