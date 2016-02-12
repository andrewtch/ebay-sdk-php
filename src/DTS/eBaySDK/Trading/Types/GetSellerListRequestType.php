<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property string $UserID
 * @property \DTS\eBaySDK\Trading\Types\UserIDArrayType $MotorsDealerUsers
 * @property \DateTime $EndTimeFrom
 * @property \DateTime $EndTimeTo
 * @property integer $Sort
 * @property \DateTime $StartTimeFrom
 * @property \DateTime $StartTimeTo
 * @property \DTS\eBaySDK\Trading\Types\PaginationType $Pagination
 * @property \DTS\eBaySDK\Trading\Enums\GranularityLevelCodeType $GranularityLevel
 * @property \DTS\eBaySDK\Trading\Types\SKUArrayType $SKUArray
 * @property boolean $IncludeWatchCount
 * @property boolean $AdminEndedItemsOnly
 * @property integer $CategoryID
 * @property boolean $IncludeVariations
 */
class GetSellerListRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'UserID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserID'
        ],
        'MotorsDealerUsers' => [
            'type' => 'DTS\eBaySDK\Trading\Types\UserIDArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MotorsDealerUsers'
        ],
        'EndTimeFrom' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EndTimeFrom'
        ],
        'EndTimeTo' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EndTimeTo'
        ],
        'Sort' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Sort'
        ],
        'StartTimeFrom' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StartTimeFrom'
        ],
        'StartTimeTo' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StartTimeTo'
        ],
        'Pagination' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PaginationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Pagination'
        ],
        'GranularityLevel' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GranularityLevel'
        ],
        'SKUArray' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SKUArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SKUArray'
        ],
        'IncludeWatchCount' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeWatchCount'
        ],
        'AdminEndedItemsOnly' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdminEndedItemsOnly'
        ],
        'CategoryID' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ],
        'IncludeVariations' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeVariations'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetSellerListRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
