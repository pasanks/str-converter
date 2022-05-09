<?php

namespace Pasanks\StrConverter;

use Illuminate\Support\Collection;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Throwable;

class Converter extends Command
{
    /**
     * List of string manipulator classes to use when running this command.
     *
     * @return array
     */
    protected $manipulators = [
        Uppercase::class,
        Alternate::class,
        Tabulate::class,
    ];

    /**
     * Configure the command options.
     *
     * @return void
     */
    protected function configure()
    {
        $this->setName('convert')
            ->setDescription('Manipulate the given string value')
            ->addArgument('value', InputArgument::REQUIRED);
    }

    /**
     * Execute the command.
     *
     * @param \Symfony\Component\Console\Input\InputInterface   $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $value = $input->getArgument('value');

        $actions = new Collection($this->manipulators);

        try {
            $actions->each(function ($action) use ($value, $output) {
                $action = new $action();

                $action->handle($value, function ($value) use ($output) {
                    $output->writeln("{$value}");
                });
            });
        } catch (Throwable $e) {
            $output->writeln($e->getMessage());
            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }
}
