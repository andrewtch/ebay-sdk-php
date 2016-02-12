<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property string $ItemID
 * @property string $SKU
 * @property \DateTime $StartTime
 * @property \DateTime $EndTime
 * @property \DTS\eBaySDK\MerchantData\Types\FeesType $Fees
 * @property string $CategoryID
 * @property string $Category2ID
 * @property \DTS\eBaySDK\MerchantData\Enums\DiscountReasonCodeType[] $DiscountReason
 * @property \DTS\eBaySDK\MerchantData\Types\ProductSuggestionsType $ProductSuggestions
 * @property \DTS\eBaySDK\MerchantData\Types\ListingRecommendationsType $ListingRecommendations
 */
class ReviseFixedPriceItemResponseType extends \DTS\eBaySDK\MerchantData\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ItemID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'SKU' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ],
        'StartTime' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StartTime'
        ],
        'EndTime' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EndTime'
        ],
        'Fees' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\FeesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Fees'
        ],
        'CategoryID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ],
        'Category2ID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Category2ID'
        ],
        'DiscountReason' => [
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'DiscountReason'
        ],
        'ProductSuggestions' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ProductSuggestionsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductSuggestions'
        ],
        'ListingRecommendations' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ListingRecommendationsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingRecommendations'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'ReviseFixedPriceItemResponse';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
