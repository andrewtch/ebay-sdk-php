<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Types\DescriptionTemplateType[] $DescriptionTemplate
 * @property integer $LayoutTotal
 * @property integer[] $ObsoleteLayoutID
 * @property integer[] $ObsoleteThemeID
 * @property \DTS\eBaySDK\Trading\Types\ThemeGroupType[] $ThemeGroup
 * @property integer $ThemeTotal
 */
class GetDescriptionTemplatesResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'DescriptionTemplate' => [
            'type' => 'DTS\eBaySDK\Trading\Types\DescriptionTemplateType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'DescriptionTemplate'
        ],
        'LayoutTotal' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LayoutTotal'
        ],
        'ObsoleteLayoutID' => [
            'type' => 'integer',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ObsoleteLayoutID'
        ],
        'ObsoleteThemeID' => [
            'type' => 'integer',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ObsoleteThemeID'
        ],
        'ThemeGroup' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ThemeGroupType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ThemeGroup'
        ],
        'ThemeTotal' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ThemeTotal'
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
