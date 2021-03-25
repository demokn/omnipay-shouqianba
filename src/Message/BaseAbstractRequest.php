<?php

namespace Omnipay\Shouqianba\Message;

use Omnipay\Common\Message\AbstractRequest;

abstract class BaseAbstractRequest extends AbstractRequest
{
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

    public function setClientSn($value)
    {
        return $this->setParameter('client_sn', $value);
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
}
