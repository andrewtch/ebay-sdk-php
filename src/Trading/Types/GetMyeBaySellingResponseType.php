<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Types\SellingSummaryType $SellingSummary
 * @property \DTS\eBaySDK\Trading\Types\PaginatedItemArrayType $ScheduledList
 * @property \DTS\eBaySDK\Trading\Types\PaginatedItemArrayType $ActiveList
 * @property \DTS\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType $SoldList
 * @property \DTS\eBaySDK\Trading\Types\PaginatedItemArrayType $UnsoldList
 * @property \DTS\eBaySDK\Trading\Types\MyeBaySellingSummaryType $Summary
 * @property \DTS\eBaySDK\Trading\Types\PaginatedItemArrayType $BidList
 * @property \DTS\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType $DeletedFromSoldList
 * @property \DTS\eBaySDK\Trading\Types\PaginatedItemArrayType $DeletedFromUnsoldList
 */
class GetMyeBaySellingResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SellingSummary' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingSummaryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingSummary'
        ],
        'ScheduledList' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ScheduledList'
        ],
        'ActiveList' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ActiveList'
        ],
        'SoldList' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SoldList'
        ],
        'UnsoldList' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UnsoldList'
        ],
        'Summary' => [
            'type' => 'DTS\eBaySDK\Trading\Types\MyeBaySellingSummaryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Summary'
        ],
        'BidList' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidList'
        ],
        'DeletedFromSoldList' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromSoldList'
        ],
        'DeletedFromUnsoldList' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromUnsoldList'
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
