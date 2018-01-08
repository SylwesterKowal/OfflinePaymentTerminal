<?php

namespace Wm21w\OfflinePaymentTerminal\Model;
class OfflinePaymentTerminal extends \Magento\Payment\Model\Method\AbstractMethod
{
    const PAYMENT_METHOD_ADMINONLY_CODE = 'offline_payment_terminal';

    /**
     * Payment method code
     *
     * @var string
     */
    protected $_code = self::PAYMENT_METHOD_ADMINONLY_CODE;

    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = true;

    protected $_canUseCheckout = false;

    protected $_canUseForMultishipping  = false;

}