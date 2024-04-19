<?php

declare(strict_types=1);

namespace App\Tests\Division\Output;

use App\Division\Output\BuzzDivisionOutput;
use PHPUnit\Framework\TestCase;

class BuzzDivisionOutputTest extends TestCase
{
    public function testGetOutput(): void
    {
        $output = new BuzzDivisionOutput();

        $this->assertSame('Buzz', $output->getOutput());
    }

    /**
     * @dataProvider provideNumberData
     */
    public function testIsApplicable(int $number, bool $expectedResult): void
    {
        $output = new BuzzDivisionOutput();

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
            [3, false],
            [4, false],
            [5, true],
            [6, false],
            [7, false],
            [8, false],
            [9, false],
            [10, true],
            [11, false],
            [12, false],
            [13, false],
            [14, false],
            [15, true],
            [16, false],
            [17, false],
            [18, false],
            [19, false],
            [20, true],
            [21, false],
            [22, false],
            [23, false],
            [24, false],
            [25, true],
            [26, false],
            [27, false],
            [28, false],
            [29, false],
            [30, true],
        ];
    }
}
