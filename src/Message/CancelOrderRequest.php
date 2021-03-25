<?php

namespace Omnipay\Shouqianba\Message;

class CancelOrderRequest extends BaseAbstractRequest
{
    protected $endpoint = 'https://vsi-api.shouqianba.com/upay/v2/cancel';

    public function getData()
    {
        $this->validate(
            'terminal_sn',
            'terminal_key'
        );

        return [
            'terminal_sn' => $this->getTerminalSn(),
            'sn' => $this->getSn(),
            'client_sn' => $this->getClientSn(),
        ];
    }

    public function sendData($data)
    {
        $payload = parent::sendData($data);

        return new CancelOrderResponse($this, $payload);
    }
}
