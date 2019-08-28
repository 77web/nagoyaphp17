<?php


namespace Quartetcom\Nagoyaphp17\NonTripleNumberFinder;


class LessThan110 implements NonTripleNumberFinderInterface
{
    public function supports(int $number): bool
    {
        return intval(sprintf('%b', $number)) < 110;
    }

    public function find(int $input): int
    {
        return $input + 1;
    }

}
