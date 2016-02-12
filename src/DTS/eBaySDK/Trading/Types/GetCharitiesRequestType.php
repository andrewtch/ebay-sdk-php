<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property string $CharityID
 * @property string $CharityName
 * @property string $Query
 * @property integer $CharityRegion
 * @property integer $CharityDomain
 * @property boolean $IncludeDescription
 * @property \DTS\eBaySDK\Trading\Enums\StringMatchCodeType $MatchType
 * @property boolean $Featured
 */
class GetCharitiesRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'CharityID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CharityID'
        ],
        'CharityName' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CharityName'
        ],
        'Query' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Query'
        ],
        'CharityRegion' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CharityRegion'
        ],
        'CharityDomain' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CharityDomain'
        ],
        'IncludeDescription' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeDescription'
        ],
        'MatchType' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MatchType'
        ],
        'Featured' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Featured'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetCharitiesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
