<?php

declare(strict_types=1);

namespace Quartetcom\Nagoyaphp17;

use PHPUnit\Framework\TestCase;
use Quartetcom\Nagoyaphp17\NonTripleNumberFinder\Contains000OnlyOnceAndNotContains111Nor00011;
use Quartetcom\Nagoyaphp17\NonTripleNumberFinder\FallbackFinder;
use Quartetcom\Nagoyaphp17\NonTripleNumberFinder\LessThan110;

class AppTest extends TestCase
{
    /**
     * @param string $input
     * @param int $expected
     * @dataProvider provideData
     */
    public function test(string $input, int $expected)
    {
        $app = $this->getSUT();

        $this->assertEquals($expected, $app->run($input));
    }

    public function provideData()
    {
        return [
            ['1441', '1444'],
            ['1', '2'],
            ['2', '3'],
            ['3', '4'],
            ['7', '9'],
            ['43690', '43691'],
            ['349525', '349526'],
            ['209715', '209716'],
            ['209919', '210066'],
            ['209664', '209700'],
            ['65536', '74898'],
            ['1048575', '1198372'],
            ['14', '18'],
            ['13', '18'],
            ['27', '36'],
            ['44', '45'],
            ['136', '146'],
            ['383', '402'],
            ['649', '658'],
            ['1227', '1228'],
            ['2693', '2706'],
            ['4943', '4946'],
            ['9152', '9362'],
            ['8336', '9362'],
            ['36993', '37449'],
            ['81868', '84260'],
            ['73287', '74898'],
            ['305901', '305956'],
            ['555516', '599186'],
            ['691590', '692809'],
            ['3112217', '3295524'],
            ['5235890', '5392676'],
            ['6804756', '6890642'],
            ['13653246', '13781284'],
            ['20099429', '20099657'],
            ['107304545', '107304548'],
            ['227978622', '227978642'],
            ['380810157', '380810386'],/*
            ['268435455', '306783378'],
            ['536870912', '613566756'],
            ['1072693248', '1227133513'],
*/        ];
    }

    private function getSUT()
    {
        return new App($this->getResolver());
    }

    private function getResolver()
    {
        $resolver = new NonTripleNumberFinderResolver();
        $resolver->addNonTripleNumberFinder(new LessThan110());
        $resolver->addNonTripleNumberFinder(new Contains000OnlyOnceAndNotContains111Nor00011());
        $resolver->addNonTripleNumberFinder(new FallbackFinder(new TripleNumberSpec()));

        return $resolver;
    }
}
