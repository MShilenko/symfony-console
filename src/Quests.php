<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;

class Quests extends Command
{
    protected function configure()
    {
        $this
            ->setName('quests')
            ->setDescription('Quests')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');

        $question1 = new Question('Введите ваше имя: ');
        $question2 = new Question('Введите ваш возраст: ');
        $question3 = new ChoiceQuestion(
            'Ваш пол (М): ',
            ['М', 'Ж'],
            0
        );
        $question3->setErrorMessage('Пол указан неверно');

        $name = $helper->ask($input, $output, $question1);
        $age = $helper->ask($input, $output, $question2);
        $gender = $helper->ask($input, $output, $question3);

        $output->writeln("Здравствуйте, {$name}. Ваш возраст: {$age}. Ваш пол: {$gender}.");
        
        return Command::SUCCESS;
    }
}