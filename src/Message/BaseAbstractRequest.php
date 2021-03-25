<?php

namespace Omnipay\Shouqianba\Message;

use Omnipay\Common\Message\AbstractRequest;

abstract class BaseAbstractRequest extends AbstractRequest
{
    protected $endpoint;

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

    public function getSignSn()
    {
        return $this->getParameter('terminal_sn');
    }

    public function getSignKey()
    {
        return $this->getParameter('terminal_key');
    }

    public function setSn($value)
    {
        return $this->setTransactionReference($value)
            ->setParameter('sn', $value);
    }

    public function getSn()
    {
        return $this->getParameter('sn');
    }

    public function setClientSn($value)
    {
        return $this->setTransactionId($value)
            ->setParameter('client_sn', $value);
    }

    public function getClientSn()
    {
        return $this->getParameter('client_sn');
    }

    public function setOsInfo($value)
    {
        return $this->setParameter('os_info', $value);
    }

    public function getOsInfo()
    {
        return $this->getParameter('os_info');
    }

    public function setSdkVersion($value)
    {
        return $this->setParameter('sdk_version', $value);
    }

    public function getSdkVersion()
    {
        return $this->getParameter('sdk_version');
    }

    public function sendData($data)
    {
        $body = json_encode($data);

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => $this->getSignSn().' '.$this->signParams($body, $this->getSignKey()),
        ];

        $response = $this->httpClient->request('POST', $this->endpoint, $headers, $body);

        return $this->unwrapResponse($response->getBody());
    }

    protected function unwrapResponse($data)
    {
        return json_decode($data, true);
    }

    protected function signParams($params, $key)
    {
        return md5($params.$key);
    }
}
