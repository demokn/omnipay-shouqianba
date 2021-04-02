<?php

namespace Omnipay\Shouqianba\Message;

class RevokeOrderRequest extends CancelOrderRequest
{
    protected $endpoint = 'https://vsi-api.shouqianba.com/upay/v2/revoke';

    public function sendData($data)
    {
        $payload = parent::sendData($data);

        return new RevokeOrderResponse($this, $payload);
    }
}
