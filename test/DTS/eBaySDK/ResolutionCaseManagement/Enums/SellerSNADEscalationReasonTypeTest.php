<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\ResolutionCaseManagement\Enums\Test;

use DTS\eBaySDK\ResolutionCaseManagement\Enums\SellerSNADEscalationReasonType;

class SellerSNADEscalationReasonTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellerSNADEscalationReasonType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\SellerSNADEscalationReasonType', $this->obj);
    }
}
