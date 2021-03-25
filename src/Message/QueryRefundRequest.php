<?php

namespace Omnipay\Shouqianba\Message;

class QueryRefundRequest extends BaseAbstractRequest
{
    protected $endpoint = 'https://vsi-api.shouqianba.com/upay/v2/query';

    public function getData()
    {
        $this->validate(
            'terminal_sn',
            'terminal_key',
            'refund_request_no'
        );

        return [
            'terminal_sn' => $this->getTerminalSn(),
            'refund_request_no' => $this->getRefundRequestNo(),
        ];
    }

    public function sendData($data)
    {
        $payload = parent::sendData($data);

        return new QueryRefundResponse($this, $payload);
    }

    public function setRefundRequestNo($value)
    {
        return $this->setParameter('refund_request_no', $value);
    }

    public function getRefundRequestNo()
    {
        return $this->getParameter('refund_request_no');
    }
}
