<?php


namespace Quartetcom\Nagoyaphp17\NonTripleNumberFinder;


use Quartetcom\Nagoyaphp17\TripleNumberSpec;

class FallbackFinder implements NonTripleNumberFinderInterface
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

    public function supports(int $input): bool
    {
        return true;
    }

    public function find(int $input): int
    {
        $cursor = $input;

        do {
            $cursor++;
            $converted = sprintf('%b', $cursor);
        } while ($this->spec->isSatisfiedBy($converted));

        return $cursor;
    }

}
