<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\ResolutionCaseManagement\Enums\Test;

use DTS\eBaySDK\ResolutionCaseManagement\Enums\AppealDecisionType;

class AppealDecisionTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AppealDecisionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\AppealDecisionType', $this->obj);
    }
}
