<?php

use DTS\eBaySDK\MerchantData\Enums\DetailLevelCodeType;

class DetailLevelCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DetailLevelCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\DetailLevelCodeType', $this->obj);
    }
}
