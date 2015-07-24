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

namespace DTS\eBaySDK\Finding\Services\Test;

use DTS\eBaySDK\Finding\Services\FindingService;
use DTS\eBaySDK\HttpClient\HttpClient;

class FindingServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->service1 = new FindingService();
        $this->service2 = new FindingService(array());
        $this->service3 = new FindingService(array(), new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Services\FindingService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Services\FindingService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Services\FindingService', $this->service3);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Services\FindingBaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Services\FindingBaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Services\FindingBaseService', $this->service3);
    }
}
