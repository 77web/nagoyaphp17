<?php


namespace Quartetcom\Nagoyaphp17;


class TripleNumberSpec
{
    public function isSatisfiedBy(string $b)
    {
        return strpos($b, '000') !== false || strpos($b, '111') !== false;
    }
}
