<?php


namespace Quartetcom\Nagoyaphp17;


use PHPUnit\Framework\TestCase;

class TripleNumberSpecTest extends TestCase
{
    public function test_000を含む()
    {
        $this->assertTrue($this->getSUT()->isSatisfiedBy('1000'));
    }

    public function test_111を含む()
    {
        $this->assertTrue($this->getSUT()->isSatisfiedBy('1110'));
    }

    /**
     * @param string $input
     * @dataProvider provideNotSatisfiedData
     */
    public function test_111も000も含まない($input)
    {
        $this->assertFalse($this->getSUT()->isSatisfiedBy($input));
    }

    public function provideNotSatisfiedData()
    {
        return [
            ['100'],
            ['110'],
            ['101'],
        ];
    }

    private function getSUT()
    {
        return new TripleNumberSpec();
    }
}
