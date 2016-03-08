<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property integer $BidCount
 * @property \DTS\eBaySDK\Trading\Types\AmountType $BidIncrement
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ConvertedCurrentPrice
 * @property \DTS\eBaySDK\Trading\Types\AmountType $CurrentPrice
 * @property \DTS\eBaySDK\Trading\Types\UserType $HighBidder
 * @property integer $LeadCount
 * @property \DTS\eBaySDK\Trading\Types\AmountType $MinimumToBid
 * @property integer $QuantitySold
 * @property boolean $ReserveMet
 * @property boolean $SecondChanceEligible
 * @property integer $BidderCount
 * @property \DTS\eBaySDK\Trading\Enums\ListingStatusCodeType $ListingStatus
 * @property \DTS\eBaySDK\Trading\Types\AmountType $FinalValueFee
 * @property \DTS\eBaySDK\Trading\Types\PromotionalSaleDetailsType $PromotionalSaleDetails
 * @property boolean $AdminEnded
 * @property boolean $SoldAsBin
 * @property integer $QuantitySoldByPickupInStore
 * @property \DTS\eBaySDK\Trading\Types\SuggestedBidValueType $SuggestedBidValues
 */
class SellingStatusType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BidCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidCount'
        ],
        'BidIncrement' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidIncrement'
        ],
        'ConvertedCurrentPrice' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedCurrentPrice'
        ],
        'CurrentPrice' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CurrentPrice'
        ],
        'HighBidder' => [
            'type' => 'DTS\eBaySDK\Trading\Types\UserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HighBidder'
        ],
        'LeadCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LeadCount'
        ],
        'MinimumToBid' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinimumToBid'
        ],
        'QuantitySold' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantitySold'
        ],
        'ReserveMet' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReserveMet'
        ],
        'SecondChanceEligible' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SecondChanceEligible'
        ],
        'BidderCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidderCount'
        ],
        'ListingStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingStatus'
        ],
        'FinalValueFee' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FinalValueFee'
        ],
        'PromotionalSaleDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PromotionalSaleDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleDetails'
        ],
        'AdminEnded' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AdminEnded'
        ],
        'SoldAsBin' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SoldAsBin'
        ],
        'QuantitySoldByPickupInStore' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantitySoldByPickupInStore'
        ],
        'SuggestedBidValues' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SuggestedBidValueType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SuggestedBidValues'
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
