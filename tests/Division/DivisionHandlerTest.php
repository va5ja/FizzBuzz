<?php

declare(strict_types=1);

namespace App\Tests\Division;

use App\Division\DivisionHandler;
use App\Division\Output\DivisionOutputInterface;
use PHPUnit\Framework\TestCase;

class DivisionHandlerTest extends TestCase
{
    /**
     * @dataProvider provideNumberData
     */
    public function testGetDivisionOutput(int $number, string $expectedResult): void
    {
        $output = new class() implements DivisionOutputInterface {
            public function getOutput(): string
            {
                return 'Test';
            }

            public function isApplicable(int $number): bool
            {
                return 0 === $number % 2 && 0 === $number % 7;
            }
        };

        $handler = new DivisionHandler([$output]);

        $this->assertSame($expectedResult, $handler->getDivisionOutput($number));
    }

    /**
     * @return array<int, string>[]
     */
    public function provideNumberData(): array
    {
        return [
            [1, '1'],
            [2, '2'],
            [3, '3'],
            [4, '4'],
            [5, '5'],
            [6, '6'],
            [7, '7'],
            [8, '8'],
            [9, '9'],
            [10, '10'],
            [11, '11'],
            [12, '12'],
            [13, '13'],
            [14, 'Test'],
            [15, '15'],
            [16, '16'],
            [17, '17'],
            [18, '18'],
            [19, '19'],
            [20, '20'],
            [21, '21'],
            [22, '22'],
            [23, '23'],
            [24, '24'],
            [25, '25'],
            [26, '26'],
            [27, '27'],
            [28, 'Test'],
            [29, '29'],
            [30, '30'],
        ];
    }
}
