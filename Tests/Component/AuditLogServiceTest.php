<?php

namespace BBIT\AuditLogBundle\Tests\Component;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class AuditLogServiceTest extends WebTestCase
{
    public function setUp() {
        $this->client = static::createClient();
        $this->container = $this->client->getContainer();
    }

    public function testServiceLoaded()
    {
       $this->assertEquals(get_class($this->container->get('bbit_audit_log.service')), 'BBIT\AuditLogBundle\Services\AuditLogService');
    }
}
