<?php

namespace Omnipay\Shouqianba\Message;

class RefundOrderRequest extends BaseAbstractRequest
{
    protected $endpoint = 'https://vsi-api.shouqianba.com/upay/v2/refund';

    public function getData()
    {
        $this->validate(
            'terminal_sn',
            'terminal_key',
            'refund_request_no',
            'operator',
            'refund_amount'
        );

        return [
            'terminal_sn' => $this->getTerminalSn(),
            'sn' => $this->getSn(),
            'client_sn' => $this->getClientSn(),
            'refund_request_no' => $this->getRefundRequestNo(),
            'operator' => $this->getOperator(),
            'refund_amount' => $this->getRefundAmount(),
            'extended' => $this->getExtended(),
            'goods_details' => $this->getGoodsDetails(),
        ];
    }

    public function sendData($data)
    {
        $payload = parent::sendData($data);

        return new RefundOrderResponse($this, $payload);
    }

    public function setRefundRequestNo($value)
    {
        return $this->setParameter('refund_request_no', $value);
    }

    public function getRefundRequestNo()
    {
        return $this->getParameter('refund_request_no');
    }

    public function setRefundAmount($value)
    {
        return $this->setParameter('refund_amount', $value);
    }

    public function getRefundAmount()
    {
        return $this->getParameter('refund_amount');
    }

    public function setOperator($value)
    {
        return $this->setParameter('operator', $value);
    }

    public function getOperator()
    {
        return $this->getParameter('operator');
    }


    public function setExtended($value)
    {
        return $this->setParameter('extended', $value);
    }

    public function getExtended()
    {
        return $this->getParameter('extended');
    }

    public function setGoodsDetails($value)
    {
        return $this->setParameter('goods_details', $value);
    }

    public function getGoodsDetails()
    {
        return $this->getParameter('goods_details');
    }
}
