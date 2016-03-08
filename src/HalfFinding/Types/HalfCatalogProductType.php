<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\HalfFinding\Types;

/**
 *
 * @property string $title
 * @property string $detailsURL
 * @property string $stockPhotoURL
 * @property \DTS\eBaySDK\HalfFinding\Types\ProductIDType[] $productID
 * @property string[] $categoryName
 * @property \DTS\eBaySDK\HalfFinding\Types\NameValueListArrayType $itemSpecifics
 * @property \DTS\eBaySDK\HalfFinding\Types\ItemType[] $item
 * @property \DTS\eBaySDK\HalfFinding\Types\Amount $listPrice
 * @property integer $reviewCount
 * @property \DTS\eBaySDK\HalfFinding\Types\Amount $BestFixedPrice
 * @property \DTS\eBaySDK\HalfFinding\Types\Amount $BestRentalPrice
 */
class HalfCatalogProductType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'title'
        ],
        'detailsURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'detailsURL'
        ],
        'stockPhotoURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'stockPhotoURL'
        ],
        'productID' => [
            'type' => 'DTS\eBaySDK\HalfFinding\Types\ProductIDType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'productID'
        ],
        'categoryName' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'categoryName'
        ],
        'itemSpecifics' => [
            'type' => 'DTS\eBaySDK\HalfFinding\Types\NameValueListArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemSpecifics'
        ],
        'item' => [
            'type' => 'DTS\eBaySDK\HalfFinding\Types\ItemType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'item'
        ],
        'listPrice' => [
            'type' => 'DTS\eBaySDK\HalfFinding\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listPrice'
        ],
        'reviewCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'reviewCount'
        ],
        'BestFixedPrice' => [
            'type' => 'DTS\eBaySDK\HalfFinding\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestFixedPrice'
        ],
        'BestRentalPrice' => [
            'type' => 'DTS\eBaySDK\HalfFinding\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestRentalPrice'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/half/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
