<?php

namespace Alfredo\Carlos\Controller\Kek;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface
{
    public function execute()
    {
        echo 'Carlos Alfredo';
        die;
    }
}
