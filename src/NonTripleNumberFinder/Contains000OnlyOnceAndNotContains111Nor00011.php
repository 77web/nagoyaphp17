<?php


namespace Quartetcom\Nagoyaphp17\NonTripleNumberFinder;


class Contains000OnlyOnceAndNotContains111Nor00011 implements NonTripleNumberFinderInterface
{
    public function supports(int $input): bool
    {
        $b = sprintf('%b', $input);

        return substr_count($b, '000') === 1 && strpos($b, '111') === false && strpos($b, '00011') === false;
    }

    public function find(int $input): int
    {
        return bindec(str_replace('000', '001', sprintf('%b', $input)));
    }

}
