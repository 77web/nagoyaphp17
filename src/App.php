<?php

declare(strict_types=1);

namespace Quartetcom\Nagoyaphp17;

class App
{
    /**
     * @var TripleNumberSpec
     */
    private $spec;

    /**
     * @param TripleNumberSpec $spec
     */
    public function __construct(TripleNumberSpec $spec)
    {
        $this->spec = $spec;
    }

    public function run(string $input)
    {
        $cursor = intval($input);

        do {
            $cursor++;
            $converted = sprintf('%b', $cursor);
        } while ($this->spec->isSatisfiedBy($converted));

        return (string)$cursor;
    }
}
