<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Types\SellingManagerAutoListType $AutomatedListingRule
 * @property \DTS\eBaySDK\Trading\Types\SellingManagerAutoRelistType $AutomatedRelistingRule
 * @property \DTS\eBaySDK\Trading\Types\SellingManagerAutoSecondChanceOfferType $AutomatedSecondChanceOfferRule
 * @property \DTS\eBaySDK\Trading\Types\FeesType $Fees
 */
class DeleteSellingManagerTemplateAutomationRuleResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AutomatedListingRule' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerAutoListType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AutomatedListingRule'
        ],
        'AutomatedRelistingRule' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerAutoRelistType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AutomatedRelistingRule'
        ],
        'AutomatedSecondChanceOfferRule' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerAutoSecondChanceOfferType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AutomatedSecondChanceOfferRule'
        ],
        'Fees' => [
            'type' => 'DTS\eBaySDK\Trading\Types\FeesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Fees'
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
