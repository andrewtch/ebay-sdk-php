<?php
namespace DTS\eBaySDK\Credentials\Test;

use DTS\eBaySDK\Credentials\CredentialsProvider;

class CredentialsProvideerTest extends \PHPUnit_Framework_TestCase
{
    private $appId, $authToken, $certId, $devId;

    private function clearEnv()
    {
        putenv(CredentialsProvider::ENV_APP_ID . '=');
        putenv(CredentialsProvider::ENV_AUTH_TOKEN . '=');
        putenv(CredentialsProvider::ENV_CERT_ID . '=');
        putenv(CredentialsProvider::ENV_DEV_ID . '=');
    }

    public function setUp()
    {
        $this->appId = getenv(CredentialsProvider::ENV_APP_ID);
        $this->authToken = getenv(CredentialsProvider::ENV_AUTH_TOKEN);
        $this->certId = getenv(CredentialsProvider::ENV_CERT_ID);
        $this->devId = getenv(CredentialsProvider::ENV_DEV_ID);
    }

    public function tearDown()
    {
        putenv(CredentialsProvider::ENV_APP_ID . '=' . $this->appId);
        putenv(CredentialsProvider::ENV_AUTH_TOKEN . '=' . $this->authToken);
        putenv(CredentialsProvider::ENV_CERT_ID . '=' . $this->certId);
        putenv(CredentialsProvider::ENV_DEV_ID . '=' . $this->devId);
    }

    public function testCreatesFromEnvironmentVariables()
    {
        $this->clearEnv();
        putenv(CredentialsProvider::ENV_APP_ID . '=111');
        putenv(CredentialsProvider::ENV_CERT_ID . '=222');
        putenv(CredentialsProvider::ENV_DEV_ID . '=333');
        putenv(CredentialsProvider::ENV_AUTH_TOKEN . '=444');

        $p = CredentialsProvider::env();
        $c = $p();

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
        $this->assertEquals('444', $c->getAuthToken());
    }

    public function testReturnsExceptionIfNoEnvironmentVariables()
    {
        $this->clearEnv();

        $p = CredentialsProvider::env();
        $c = $p();

        $this->assertInstanceOf('\InvalidArgumentException', $c);
    }
}

