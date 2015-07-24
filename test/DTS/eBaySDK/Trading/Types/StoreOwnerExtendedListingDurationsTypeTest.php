<?php

use DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsType;

class StoreOwnerExtendedListingDurationsTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new StoreOwnerExtendedListingDurationsType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
