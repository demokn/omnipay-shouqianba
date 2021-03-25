<?php

namespace Omnipay\Shouqianba\Message;

class ActiveTerminalRequest extends BaseAbstractRequest
{
    protected $endpoint = 'https://vsi-api.shouqianba.com/terminal/activate';

    public function getData()
    {
        $this->validate(
            'vendor_sn',
            'vendor_key',
            'app_id',
            'code',
            'device_id'
        );

        return [
            'app_id' => $this->getAppId(),
            'code' => $this->getCode(),
            'device_id' => $this->getDeviceId(),
            'client_sn' => $this->getClientSn(),
            'name' => $this->getName(),
            'os_info' => $this->getOsInfo(),
            'sdk_version' => $this->getSdkVersion(),
        ];
    }

    public function sendData($data)
    {
        $payload = parent::sendData($data);

        return new ActiveTerminalResponse($this, $payload);
    }

    public function getSignSn()
    {
        return $this->getParameter('vendor_sn');
    }

    public function getSignKey()
    {
        return $this->getParameter('vendor_key');
    }

    public function setAppId($value)
    {
        return $this->setParameter('app_id', $value);
    }

    public function getAppId()
    {
        return $this->getParameter('app_id');
    }

    public function setCode($value)
    {
        return $this->setParameter('code', $value);
    }

    public function getCode()
    {
        return $this->getParameter('code');
    }

    public function setDeviceId($value)
    {
        return $this->setParameter('device_id', $value);
    }

    public function getDeviceId()
    {
        return $this->getParameter('device_id');
    }

    public function setName($value)
    {
        return $this->setParameter('name', $value);
    }

    public function getName()
    {
        return $this->getParameter('name');
    }
}
