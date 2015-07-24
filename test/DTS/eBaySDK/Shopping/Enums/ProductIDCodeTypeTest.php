<?php

use DTS\eBaySDK\Shopping\Enums\ProductIDCodeType;

class ProductIDCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProductIDCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\ProductIDCodeType', $this->obj);
    }
}
