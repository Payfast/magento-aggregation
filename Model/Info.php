<?php

namespace Payfast\Payfast\Model;

/**
 * Payfast payment information model
 *
 * Aware of all Payfast payment methods
 * Collects and provides access to Payfast-specific payment data
 * Provides business logic information about payment flow
 */
class Info
{
    /**
     * Cross-models public exchange keys
     *
     * @var string
     */
    public const PAYMENT_STATUS = 'payment_status';
    public const M_PAYMENT_ID   = 'm_payment_id';
    public const PF_PAYMENT_ID  = 'pf_payment_id';
    public const EMAIL_ADDRESS  = 'email_address';
    public const MERCHANT_ID    = 'merchant_id';
    public const MERCHANT_KEY   = 'merchant_key';

    /**
     * Apply a filter upon value getting
     *
     * @param string $value
     * @param string $key
     *
     * @return string
     */
    protected function _getValue(string $value, string $key): string
    {
        $label       = '';
        $outputValue = implode(', ', (array)$value);

        return sprintf('#%s%s', $outputValue, $outputValue == $label ? '' : ': ' . $label);
    }
}
