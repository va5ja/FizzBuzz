<?php

declare(strict_types=1);

namespace App\Division\Output;

class BuzzDivisionOutput implements DivisionOutputInterface
{
    public function getOutput(): string
    {
        return 'Buzz';
    }

    public function isApplicable(int $number): bool
    {
        return $number % 5 === 0;
    }
}
