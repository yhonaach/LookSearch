<?php
/**
 * Tests for LookSearch
 */

use PHPUnit\Framework\TestCase;
use Looksearch\Looksearch;

class LooksearchTest extends TestCase {
    private Looksearch $instance;

    protected function setUp(): void {
        $this->instance = new Looksearch(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Looksearch::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
