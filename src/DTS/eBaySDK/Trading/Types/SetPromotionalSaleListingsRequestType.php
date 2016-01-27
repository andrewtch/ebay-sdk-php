<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property integer $PromotionalSaleID
 * @property \DTS\eBaySDK\Trading\Enums\ModifyActionCodeType $Action
 * @property \DTS\eBaySDK\Trading\Types\ItemIDArrayType $PromotionalSaleItemIDArray
 * @property integer $StoreCategoryID
 * @property integer $CategoryID
 * @property boolean $AllFixedPriceItems
 * @property boolean $AllStoreInventoryItems
 * @property boolean $AllAuctionItems
 */
class SetPromotionalSaleListingsRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'PromotionalSaleID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleID'
        ),
        'Action' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Action'
        ),
        'PromotionalSaleItemIDArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemIDArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleItemIDArray'
        ),
        'StoreCategoryID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreCategoryID'
        ),
        'CategoryID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ),
        'AllFixedPriceItems' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AllFixedPriceItems'
        ),
        'AllStoreInventoryItems' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AllStoreInventoryItems'
        ),
        'AllAuctionItems' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AllAuctionItems'
        )
    );

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = array())
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
            self::$requestXmlRootElementNames[__CLASS__] = 'SetPromotionalSaleListingsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
