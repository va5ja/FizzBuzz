<?php

declare(strict_types=1);

namespace App\Division\Output;

interface DivisionOutputInterface
{
    /**
     * Outputs the string representation of the output.
     * @return string
     */
    public function getOutput(): string;

    /**
     * Checks if the output is applicable for the given number.
     * @param int $number
     * @return bool
     */
    public function isApplicable(int $number): bool;
}
