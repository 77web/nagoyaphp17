<?php

declare(strict_types=1);

namespace Quartetcom\Nagoyaphp17;

class App
{
    /**
     * @var NonTripleNumberFinderResolver
     */
    private $finderResolver;

    /**
     * @param NonTripleNumberFinderResolver $finderResolver
     */
    public function __construct(NonTripleNumberFinderResolver $finderResolver)
    {
        $this->finderResolver = $finderResolver;
    }

    public function run(string $input)
    {
        $number = intval($input);

        return (int)$this->finderResolver->resolve($number)->find($number);
    }
}
