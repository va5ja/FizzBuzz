<?php

declare(strict_types=1);

namespace App\Division;

use App\Division\Output\DivisionOutputInterface;
use Symfony\Component\DependencyInjection\Attribute\TaggedIterator;

class DivisionHandler
{
    /**
     * @param iterable<DivisionOutputInterface> $outputs
     */
    public function __construct(
        #[TaggedIterator('app.division_output')]
        private readonly iterable $outputs
    ) {
    }

    public function getDivisionOutput(int $number): string
    {
        foreach ($this->outputs as $output) {
            if ($output->isApplicable($number)) {
                return $output->getOutput();
            }
        }

        return (string)$number;
    }
}
