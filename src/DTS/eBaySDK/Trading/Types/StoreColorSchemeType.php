<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property integer $ColorSchemeID
 * @property string $Name
 * @property \DTS\eBaySDK\Trading\Types\StoreColorType $Color
 * @property \DTS\eBaySDK\Trading\Types\StoreFontType $Font
 */
class StoreColorSchemeType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ColorSchemeID' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ColorSchemeID'
        ],
        'Name' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Name'
        ],
        'Color' => [
            'type' => 'DTS\eBaySDK\Trading\Types\StoreColorType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Color'
        ],
        'Font' => [
            'type' => 'DTS\eBaySDK\Trading\Types\StoreFontType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Font'
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
