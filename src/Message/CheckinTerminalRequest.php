<?php

namespace Omnipay\Shouqianba\Message;

class CheckinTerminalRequest extends BaseAbstractRequest
{
    protected $endpoint = 'https://vsi-api.shouqianba.com/terminal/checkin';

    public function getData()
    {
        $this->validate(
            'terminal_sn',
            'terminal_key',
            'device_id'
        );

        return [
            'terminal_sn' => $this->getTerminalSn(),
            'device_id' => $this->getDeviceId(),
            'os_info' => $this->getOsInfo(),
            'sdk_version' => $this->getSdkVersion(),
        ];
    }

    public function sendData($data)
    {
        $payload = parent::sendData($data);

        return new CheckinTerminalResponse($this, $payload);
    }

    public function setDeviceId($value)
    {
        return $this->setParameter('device_id', $value);
    }

    public function getDeviceId()
    {
        return $this->getParameter('device_id');
    }
}
