<?php

namespace Omnipay\Shouqianba\Message;

use Omnipay\Common\Message\AbstractResponse;

abstract class BaseAbstractResponse extends AbstractResponse
{
    public function isSuccessful()
    {
        return true;
    }
}
