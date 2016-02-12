<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property \DTS\eBaySDK\MerchantData\Enums\CharitySellerStatusCodeType $CharitySellerStatus
 * @property \DTS\eBaySDK\MerchantData\Types\CharityAffiliationType[] $CharityAffiliation
 * @property boolean $TermsAndConditionsAccepted
 */
class CharitySellerType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'CharitySellerStatus' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CharitySellerStatus'
        ],
        'CharityAffiliation' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\CharityAffiliationType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'CharityAffiliation'
        ],
        'TermsAndConditionsAccepted' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TermsAndConditionsAccepted'
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
