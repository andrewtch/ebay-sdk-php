<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ShippingInsuranceCost
 * @property string $ShippingService
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ShippingServiceCost
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ShippingServiceAdditionalCost
 * @property integer $ShippingServicePriority
 * @property boolean $ExpeditedService
 * @property integer $ShippingTimeMin
 * @property integer $ShippingTimeMax
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ShippingSurcharge
 * @property boolean $FreeShipping
 * @property boolean $LocalPickup
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ImportCharge
 * @property \DTS\eBaySDK\MerchantData\Types\ShippingPackageInfoType[] $ShippingPackageInfo
 * @property \DateTime $ShippingServiceCutOffTime
 */
class ShippingServiceOptionsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ShippingInsuranceCost' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingInsuranceCost'
        ],
        'ShippingService' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingService'
        ],
        'ShippingServiceCost' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCost'
        ],
        'ShippingServiceAdditionalCost' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceAdditionalCost'
        ],
        'ShippingServicePriority' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServicePriority'
        ],
        'ExpeditedService' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpeditedService'
        ],
        'ShippingTimeMin' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingTimeMin'
        ],
        'ShippingTimeMax' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingTimeMax'
        ],
        'ShippingSurcharge' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingSurcharge'
        ],
        'FreeShipping' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FreeShipping'
        ],
        'LocalPickup' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalPickup'
        ],
        'ImportCharge' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ImportCharge'
        ],
        'ShippingPackageInfo' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShippingPackageInfoType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingPackageInfo'
        ],
        'ShippingServiceCutOffTime' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCutOffTime'
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
