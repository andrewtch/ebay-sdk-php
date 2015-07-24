<?php
/**
 * THE CODE IN THIS FILE WAS GENERATED FROM THE EBAY WSDL USING THE PROJECT:
 *
 * https://github.com/davidtsadler/ebay-api-sdk-php
 *
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $FeeOrCreditAmount
 * @property \DTS\eBaySDK\MerchantData\Types\UserIdentityType $Payee
 * @property \DTS\eBaySDK\MerchantData\Types\UserIdentityType $Payer
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $PaymentAmount
 * @property \DTS\eBaySDK\MerchantData\Types\TransactionReferenceType[] $PaymentReferenceID
 * @property \DTS\eBaySDK\MerchantData\Enums\PaymentTransactionStatusCodeType $PaymentStatus
 * @property \DateTime $PaymentTime
 * @property \DTS\eBaySDK\MerchantData\Types\TransactionReferenceType $ReferenceID
 */
class PaymentTransactionType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'FeeOrCreditAmount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeeOrCreditAmount'
        ),
        'Payee' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\UserIdentityType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Payee'
        ),
        'Payer' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\UserIdentityType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Payer'
        ),
        'PaymentAmount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentAmount'
        ),
        'PaymentReferenceID' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\TransactionReferenceType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentReferenceID'
        ),
        'PaymentStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentStatus'
        ),
        'PaymentTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentTime'
        ),
        'ReferenceID' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\TransactionReferenceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReferenceID'
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
            self::$xmlNamespaces[__CLASS__] = 'urn:ebay:apis:eBLBaseComponents';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
