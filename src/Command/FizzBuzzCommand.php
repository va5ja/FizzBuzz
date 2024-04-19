<?php

declare(strict_types=1);

namespace App\Command;

use App\Division\DivisionHandler;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:fizz-buzz')]
class FizzBuzzCommand extends Command
{
    public function __construct(private readonly DivisionHandler $divisionHandler)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        for ($number = 1; $number <= 100; ++$number) {
            $output->writeln($this->divisionHandler->getDivisionOutput($number));
        }

        return Command::SUCCESS;
    }
}
