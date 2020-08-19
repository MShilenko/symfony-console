<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RepeatLine extends Command
{
    protected function configure()
    {
        $this
            ->setName('repeat_line')
            ->setDescription('Repeat line')
            ->addArgument('string', InputArgument::REQUIRED, 'Add string')
            ->addArgument('times', InputArgument::OPTIONAL, 'Add number')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $repeat = $input->getArgument('times') ?? 2;
        
        for ($i = 0; $i < $repeat; $i++) {
            $output->writeln($input->getArgument('string'));
        }
        
        return Command::SUCCESS;
    }
}