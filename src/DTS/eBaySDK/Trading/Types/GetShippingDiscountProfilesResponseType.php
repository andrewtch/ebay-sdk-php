<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Enums\CurrencyCodeType $CurrencyID
 * @property \DTS\eBaySDK\Trading\Types\FlatShippingDiscountType $FlatShippingDiscount
 * @property \DTS\eBaySDK\Trading\Types\CalculatedShippingDiscountType $CalculatedShippingDiscount
 * @property boolean $PromotionalShippingDiscount
 * @property \DTS\eBaySDK\Trading\Types\CalculatedHandlingDiscountType $CalculatedHandlingDiscount
 * @property \DTS\eBaySDK\Trading\Types\PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails
 * @property \DTS\eBaySDK\Trading\Types\ShippingInsuranceType $ShippingInsurance
 * @property \DTS\eBaySDK\Trading\Types\ShippingInsuranceType $InternationalShippingInsurance
 * @property \DTS\eBaySDK\Trading\Enums\CombinedPaymentPeriodCodeType $CombinedDuration
 */
class GetShippingDiscountProfilesResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'CurrencyID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CurrencyID'
        ],
        'FlatShippingDiscount' => [
            'type' => 'DTS\eBaySDK\Trading\Types\FlatShippingDiscountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FlatShippingDiscount'
        ],
        'CalculatedShippingDiscount' => [
            'type' => 'DTS\eBaySDK\Trading\Types\CalculatedShippingDiscountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CalculatedShippingDiscount'
        ],
        'PromotionalShippingDiscount' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PromotionalShippingDiscount'
        ],
        'CalculatedHandlingDiscount' => [
            'type' => 'DTS\eBaySDK\Trading\Types\CalculatedHandlingDiscountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CalculatedHandlingDiscount'
        ],
        'PromotionalShippingDiscountDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PromotionalShippingDiscountDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PromotionalShippingDiscountDetails'
        ],
        'ShippingInsurance' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingInsuranceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingInsurance'
        ],
        'InternationalShippingInsurance' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingInsuranceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalShippingInsurance'
        ],
        'CombinedDuration' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CombinedDuration'
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
