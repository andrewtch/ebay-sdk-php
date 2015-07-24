<?php

use DTS\eBaySDK\MerchantData\Enums\TaxTypeCodeType;

class TaxTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TaxTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\TaxTypeCodeType', $this->obj);
    }
}
