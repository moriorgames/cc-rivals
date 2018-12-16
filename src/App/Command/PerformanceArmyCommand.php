<?php

namespace App\Command;

use App\Entity\Army;
use App\Repository\IArmyRepository;
use App\Services\PerformanceCalculator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PerformanceArmyCommand extends Command
{
    protected static $defaultName = 'app:performance-army';

    private $performanceCalculator;

    private $armyRepository;

    public function __construct(PerformanceCalculator $performanceCalculator, IArmyRepository $armyRepository)
    {
        $this->performanceCalculator = $performanceCalculator;
        $this->armyRepository = $armyRepository;

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Evaluate the army performance.')
            ->setHelp('Evaluate the army performance and returns some valuable data.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Performance Calculation',
            '=======================',
            '',
        ]);

        $tableData = [];
        /** @var Army $army */
        foreach ($this->armyRepository->findAll() as $army) {
            $healthPerf = $this->performanceCalculator->calculateByHealth($army);
            $dpsPerf = $this->performanceCalculator->calculateByDps($army);
            $tableData[] = [$army->getName(), $healthPerf, $dpsPerf];
        }

        $table = new Table($output);
        $table
            ->setHeaders(['Name', 'Health perf.', 'Dps perf.'])
            ->setRows($tableData);
        $table->render();

        $output->write('');
    }
}
