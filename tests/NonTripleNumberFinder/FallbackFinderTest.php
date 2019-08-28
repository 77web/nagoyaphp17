<?php


namespace Quartetcom\Nagoyaphp17\NonTripleNumberFinder;


use PHPUnit\Framework\TestCase;
use Quartetcom\Nagoyaphp17\TripleNumberSpec;

class FallbackFinderTest extends TestCase
{

    public function test_find()
    {
        $this->assertEquals(2, $this->getSUT()->find(1));
        $this->assertEquals(9, $this->getSUT()->find(7));
        $this->assertEquals(18, $this->getSUT()->find(14));
    }

    private function getSUT()
    {
        return new FallbackFinder(new TripleNumberSpec());
    }
}
