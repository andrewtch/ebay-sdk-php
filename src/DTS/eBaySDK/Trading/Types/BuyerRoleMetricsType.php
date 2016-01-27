<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property integer $PositiveFeedbackLeftCount
 * @property integer $NegativeFeedbackLeftCount
 * @property integer $NeutralFeedbackLeftCount
 * @property double $FeedbackLeftPercent
 */
class BuyerRoleMetricsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'PositiveFeedbackLeftCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PositiveFeedbackLeftCount'
        ),
        'NegativeFeedbackLeftCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NegativeFeedbackLeftCount'
        ),
        'NeutralFeedbackLeftCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NeutralFeedbackLeftCount'
        ),
        'FeedbackLeftPercent' => array(
            'type' => 'double',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackLeftPercent'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
