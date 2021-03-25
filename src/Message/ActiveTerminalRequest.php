<?php

namespace Omnipay\Shouqianba\Message;

class ActiveTerminalRequest extends BaseAbstractRequest
{
    public function getData()
    {
        $this->validate(
            'app_id',
            'code',
            'device_id'
        );

        $data = [
            'app_id' => $this->getAppId(),
            'code' => $this->getCode(),
            'device_id' => $this->getDeviceId(),
            'client_sn' => $this->getClientSn(),
            'name' => $this->getName(),
            'os_info' => $this->getOsInfo(),
            'sdk_version' => $this->getSdkVersion(),
        ];
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
