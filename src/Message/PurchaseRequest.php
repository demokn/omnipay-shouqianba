<?php

namespace Omnipay\Shouqianba\Message;

class PurchaseRequest extends BaseAbstractRequest
{
    protected $endpoint = 'https://vsi-api.shouqianba.com/upay/v2/pay';

    public function getData()
    {
        $this->validate(
            'terminal_sn',
            'terminal_key',
            'client_sn',
            'total_amount',
            'dynamic_id',
            'subject',
            'operator'
        );

        return [
            'terminal_sn' => $this->getTerminalSn(),
            'client_sn' => $this->getClientSn(),
            'total_amount' => $this->getTotalAmount(),
            'payway' => $this->getPayWay(),
            'dynamic_id' => $this->getDynamicId(),
            'subject' => $this->getSubject(),
            'operator'=> $this->getOperator(),
            'description' => $this->getDescription(),
            'longitude' => $this->getLongitude(),
            'latitude' => $this->getLatitude(),
            'device_id' => $this->getDeviceId(),
            'extended' => $this->getExtended(),
            'goods_details' => $this->getGoodsDetails(),
            'reflect' => $this->getReflect(),
            'notify_url' => $this->getNotifyUrl(),
        ];
    }

    public function sendData($data)
    {
        $payload = parent::sendData($data);

        return new PurchaseResponse($this, $payload);
    }

    public function setTotalAmount($value)
    {
        return $this->setAmountInteger($value)
            ->setParameter('total_amount', $value);
    }

    public function getTotalAmount()
    {
        return $this->getParameter('total_amount');
    }

    public function setPayWay($value)
    {
        return $this->setParameter('payway', $value);
    }

    public function getPayWay()
    {
        return $this->getParameter('payway');
    }

    public function setDynamicId($value)
    {
        return $this->setParameter('dynamic_id', $value);
    }

    public function getDynamicId()
    {
        return $this->getParameter('dynamic_id');
    }

    public function setSubject($value)
    {
        return $this->setParameter('subject', $value);
    }

    public function getSubject()
    {
        return $this->getParameter('subject');
    }

    public function setOperator($value)
    {
        return $this->setParameter('operator', $value);
    }

    public function getOperator()
    {
        return $this->getParameter('operator');
    }

    public function setLongitude($value)
    {
        return $this->setParameter('longitude', $value);
    }

    public function getLongitude()
    {
        return $this->getParameter('longitude');
    }

    public function setLatitude($value)
    {
        return $this->setParameter('latitude', $value);
    }

    public function getLatitude()
    {
        return $this->getParameter('latitude');
    }

    public function setDeviceId($value)
    {
        return $this->setParameter('device_id', $value);
    }

    public function getDeviceId()
    {
        return $this->getParameter('device_id');
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

    public function setReflect($value)
    {
        return $this->setParameter('reflect', $value);
    }

    public function getReflect()
    {
        return $this->getParameter('reflect');
    }
}
