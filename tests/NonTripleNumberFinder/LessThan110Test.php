<?php


namespace Quartetcom\Nagoyaphp17\NonTripleNumberFinder;


use PHPUnit\Framework\TestCase;

class LessThan110Test extends TestCase
{
    public function test_supports()
    {
        $this->assertTrue($this->getSUT()->supports(1));
        $this->assertTrue($this->getSUT()->supports(2));
        $this->assertTrue($this->getSUT()->supports(5));
        $this->assertFalse($this->getSUT()->supports(6));
    }

    public function test_find()
    {
        $this->assertEquals(2, $this->getSUT()->find(1));
        $this->assertEquals(3, $this->getSUT()->find(2));
        $this->assertEquals(6, $this->getSUT()->find(5));
    }

    private function getSUT()
    {
        return new LessThan110();
    }
}
