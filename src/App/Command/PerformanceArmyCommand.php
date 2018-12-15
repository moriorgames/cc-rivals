<?php

namespace App\Command;

use App\Repository\InMemoryArmyRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PerformanceArmyCommand extends Command
{
    protected static $defaultName = 'app:performance-army';

    protected function configure()
    {
        $this
            ->setDescription('Evaluate the army performance.')
            ->setHelp('Evaluate the army performance and returns some valuable data.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'User Creator',
            '============',
            '',
        ]);

        $armyRepository = new InMemoryArmyRepository;

        dump($armyRepository->findByName('riflemen'));

        $output->writeln('Whoa!');

        $output->write('You are about to ');
        $output->write('create a user.');
    }
}
