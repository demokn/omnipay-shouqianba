<?php

namespace Omnipay\Shouqianba;

use Omnipay\Common\AbstractGateway;

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
}
