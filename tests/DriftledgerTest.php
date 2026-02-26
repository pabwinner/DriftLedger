<?php
/**
 * Tests for DriftLedger
 */

use PHPUnit\Framework\TestCase;
use Driftledger\Driftledger;

class DriftledgerTest extends TestCase {
    private Driftledger $instance;

    protected function setUp(): void {
        $this->instance = new Driftledger(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Driftledger::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
