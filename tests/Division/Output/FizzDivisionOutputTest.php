<?php

declare(strict_types=1);

namespace App\Tests\Division\Output;

use App\Division\Output\FizzDivisionOutput;
use PHPUnit\Framework\TestCase;

class FizzDivisionOutputTest extends TestCase
{
    public function testGetOutput(): void
    {
        $output = new FizzDivisionOutput();

        $this->assertSame('Fizz', $output->getOutput());
    }

    /**
     * @dataProvider provideNumberData
     */
    public function testIsApplicable(int $number, bool $expectedResult): void
    {
        $output = new FizzDivisionOutput();

        $this->assertSame($expectedResult, $output->isApplicable($number));
    }

    /**
     * @return array<int, bool>[]
     */
    public function provideNumberData(): array
    {
        return [
            [1, false],
            [2, false],
            [3, true],
            [4, false],
            [5, false],
            [6, true],
            [7, false],
            [8, false],
            [9, true],
            [10, false],
            [11, false],
            [12, true],
            [13, false],
            [14, false],
            [15, true],
            [16, false],
            [17, false],
            [18, true],
            [19, false],
            [20, false],
            [21, true],
            [22, false],
            [23, false],
            [24, true],
            [25, false],
            [26, false],
            [27, true],
            [28, false],
            [29, false],
            [30, true],
        ];
    }
}
