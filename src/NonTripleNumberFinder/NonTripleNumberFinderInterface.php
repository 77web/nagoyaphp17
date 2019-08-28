<?php


namespace Quartetcom\Nagoyaphp17\NonTripleNumberFinder;


interface NonTripleNumberFinderInterface
{
    public function supports(int $input): bool;

    public function find(int $input): int;
}
