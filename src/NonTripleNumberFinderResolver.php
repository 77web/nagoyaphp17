<?php

namespace Quartetcom\Nagoyaphp17;

use Quartetcom\Nagoyaphp17\NonTripleNumberFinder\NonTripleNumberFinderInterface;


class NonTripleNumberFinderResolver
{
    /**
     * @var NonTripleNumberFinderInterface[]
     */
    private $nonTripleNumberFinders = [];

    public function addNonTripleNumberFinder(NonTripleNumberFinderInterface $nonTripleNumberFinder)
    {
        $this->nonTripleNumberFinders[] = $nonTripleNumberFinder;

        return $this;
    }

    public function resolve(int $target)
    {
        foreach ($this->nonTripleNumberFinders as $nonTripleNumberFinder) {
            if ($nonTripleNumberFinder->supports($target)) {
                return $nonTripleNumberFinder;
            }
        }

        throw new \LogicException('No NonTripleNumberFinder defined');
    }
}
