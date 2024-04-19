<?php

declare(strict_types=1);

namespace App\Division\Output;

class FizzBuzzDivisionOutput implements DivisionOutputInterface
{
    public function getOutput(): string
    {
        return 'FizzBuzz';
    }

    public function isApplicable(int $number): bool
    {
        return 0 === $number % 3 && 0 === $number % 5;
    }

    public static function getDefaultPriority(): int
    {
        return 3;
    }
}
