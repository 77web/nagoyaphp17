<?php


namespace Quartetcom\Nagoyaphp17\NonTripleNumberFinder;


use PHPUnit\Framework\TestCase;

class Contains000OnlyOnceAndNotContains111Test extends TestCase
{
    public function test_find()
    {
        $this->assertEquals(9, $this->getSUT()->find(8));
    }

    private function getSUT()
    {
        return new Contains000OnlyOnceAndNotContains111();
    }
}
