<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SayHello extends Command
{
    protected function configure()
    {
        $this
            ->setName('say_hello')
            ->setDescription('Say "hello"')
            ->addArgument('string', InputArgument::REQUIRED, 'Add string')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Привет ' . $input->getArgument('string'));

        return Command::SUCCESS;
    }
}