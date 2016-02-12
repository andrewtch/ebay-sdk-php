<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Enums\CheckoutStatusCodeType $CheckoutStatus
 * @property \DTS\eBaySDK\Trading\Enums\SellingManagerPaidStatusCodeType $PaidStatus
 * @property \DTS\eBaySDK\Trading\Enums\SellingManagerShippedStatusCodeType $ShippedStatus
 * @property \DTS\eBaySDK\Trading\Enums\PaymentStatusCodeType $eBayPaymentStatus
 * @property string $PayPalTransactionID
 * @property \DTS\eBaySDK\Trading\Enums\BuyerPaymentMethodCodeType $PaymentMethodUsed
 * @property \DTS\eBaySDK\Trading\Enums\CommentTypeCodeType $FeedbackReceived
 * @property boolean $FeedbackSent
 * @property integer $TotalEmailsSent
 * @property \DTS\eBaySDK\Trading\Enums\PaymentHoldStatusCodeType $PaymentHoldStatus
 * @property string $SellerInvoiceNumber
 * @property \DateTime $ShippedTime
 * @property \DateTime $PaidTime
 * @property \DateTime $LastEmailSentTime
 * @property \DateTime $SellerInvoiceTime
 * @property boolean $IntegratedMerchantCreditCardEnabled
 */
class SellingManagerOrderStatusType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'CheckoutStatus' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CheckoutStatus'
        ],
        'PaidStatus' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaidStatus'
        ],
        'ShippedStatus' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippedStatus'
        ],
        'eBayPaymentStatus' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayPaymentStatus'
        ],
        'PayPalTransactionID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalTransactionID'
        ],
        'PaymentMethodUsed' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethodUsed'
        ],
        'FeedbackReceived' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackReceived'
        ],
        'FeedbackSent' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackSent'
        ],
        'TotalEmailsSent' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalEmailsSent'
        ],
        'PaymentHoldStatus' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldStatus'
        ],
        'SellerInvoiceNumber' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerInvoiceNumber'
        ],
        'ShippedTime' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
        ],
        'PaidTime' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaidTime'
        ],
        'LastEmailSentTime' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LastEmailSentTime'
        ],
        'SellerInvoiceTime' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerInvoiceTime'
        ],
        'IntegratedMerchantCreditCardEnabled' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
