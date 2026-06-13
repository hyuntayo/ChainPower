<?php
/**
 * Tests for ChainPower
 */

use PHPUnit\Framework\TestCase;
use Chainpower\Chainpower;

class ChainpowerTest extends TestCase {
    private Chainpower $instance;

    protected function setUp(): void {
        $this->instance = new Chainpower(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainpower::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
