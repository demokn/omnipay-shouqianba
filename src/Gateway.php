<?php

namespace Omnipay\Shouqianba;

use Omnipay\Common\AbstractGateway;
use Omnipay\Shouqianba\Message\ActiveTerminalRequest;
use Omnipay\Shouqianba\Message\CancelOrderRequest;
use Omnipay\Shouqianba\Message\CheckinTerminalRequest;
use Omnipay\Shouqianba\Message\PreCreateOrderRequest;
use Omnipay\Shouqianba\Message\PurchaseRequest;
use Omnipay\Shouqianba\Message\QueryOrderRequest;
use Omnipay\Shouqianba\Message\QueryRefundRequest;
use Omnipay\Shouqianba\Message\RefundOrderRequest;
use Omnipay\Shouqianba\Message\RevokeOrderRequest;

class Gateway extends AbstractGateway
{
    public function getName()
    {
        return "Shouqianba";
    }

    public function setVendorSn($value)
    {
        return $this->setParameter('vendor_sn', $value);
    }

    public function getVendorSn()
    {
        return $this->getParameter('vendor_sn');
    }

    public function setVendorKey($value)
    {
        return $this->setParameter('vendor_key', $value);
    }

    public function getVendorKey()
    {
        return $this->getParameter('vendor_key');
    }

    public function setTerminalSn($value)
    {
        return $this->setParameter('terminal_sn', $value);
    }

    public function getTerminalSn()
    {
        return $this->getParameter('terminal_sn');
    }

    public function setTerminalKey($value)
    {
        return $this->setParameter('terminal_key', $value);
    }

    public function getTerminalKey()
    {
        return $this->getParameter('terminal_key');
    }

    public function setNotifyUrl($value)
    {
        return $this->setParameter('notify_url', $value);
    }

    public function getNotifyUrl()
    {
        return $this->getParameter('notify_url');
    }

    public function activeTerminal(array $parameters = [])
    {
        return $this->createRequest(ActiveTerminalRequest::class, $parameters);
    }

    public function checkinTerminal(array $parameters = [])
    {
        return $this->createRequest(CheckinTerminalRequest::class, $parameters);
    }

    public function purchase(array $parameters = [])
    {
        return $this->createRequest(PurchaseRequest::class, $parameters);
    }

    public function preCreateOrder(array $parameters = [])
    {
        return $this->createRequest(PreCreateOrderRequest::class, $parameters);
    }

    public function refund(array $parameters = [])
    {
        return $this->createRequest(RefundOrderRequest::class, $parameters);
    }

    public function cancelOrder(array $parameters = [])
    {
        return $this->createRequest(CancelOrderRequest::class, $parameters);
    }

    public function revokeOrder(array $parameters = [])
    {
        return $this->createRequest(RevokeOrderRequest::class, $parameters);
    }

    public function queryOrder(array $parameters = [])
    {
        return $this->createRequest(QueryOrderRequest::class, $parameters);
    }

    public function queryRefund(array $parameters = [])
    {
        return $this->createRequest(QueryRefundRequest::class, $parameters);
    }
}
