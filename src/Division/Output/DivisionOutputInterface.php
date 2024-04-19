<?php

declare(strict_types=1);

namespace App\Division\Output;

interface DivisionOutputInterface
{
    public function getOutput(): string;

    public function isApplicable(int $number): bool;
}
