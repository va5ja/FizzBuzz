<?php

declare(strict_types=1);

namespace App\Division\Output;

class FizzDivisionOutput implements DivisionOutputInterface
{
    public function getOutput(): string
    {
        return 'Fizz';
    }

    public function isApplicable(int $number): bool
    {
        return $number % 3 === 0;
    }
}
