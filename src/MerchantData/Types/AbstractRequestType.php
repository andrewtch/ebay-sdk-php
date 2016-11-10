<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property \DTS\eBaySDK\MerchantData\Enums\DetailLevelCodeType[] $DetailLevel
 * @property string $ErrorLanguage
 * @property string $MessageID
 * @property string $Version
 * @property string $EndUserIP
 * @property \DTS\eBaySDK\MerchantData\Types\XMLRequesterCredentialsType $RequesterCredentials
 * @property \DTS\eBaySDK\MerchantData\Enums\ErrorHandlingCodeType $ErrorHandling
 * @property string $InvocationID
 * @property string[] $OutputSelector
 * @property \DTS\eBaySDK\MerchantData\Enums\WarningLevelCodeType $WarningLevel
 * @property \DTS\eBaySDK\MerchantData\Types\BotBlockRequestType $BotBlock
 */
class AbstractRequestType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'DetailLevel' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'DetailLevel'
        ],
        'ErrorLanguage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ErrorLanguage'
        ],
        'MessageID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MessageID'
        ],
        'Version' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Version'
        ],
        'EndUserIP' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndUserIP'
        ],
        'RequesterCredentials' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\XMLRequesterCredentialsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RequesterCredentials'
        ],
        'ErrorHandling' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ErrorHandling'
        ],
        'InvocationID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InvocationID'
        ],
        'OutputSelector' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'OutputSelector'
        ],
        'WarningLevel' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WarningLevel'
        ],
        'BotBlock' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\BotBlockRequestType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BotBlock'
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
