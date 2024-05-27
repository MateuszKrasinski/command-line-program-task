<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Psr\Log\LoggerInterface;
use App\Service\DataPersisterInterface;
use App\Service\DataParserInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(
    name: 'app:process-data',
    description: 'Process a local XML file and push data to the database'
)]
class DataProcessCommand extends Command
{
    public function __construct(
        private readonly DataPersisterInterface $dataPersister,
        private readonly DataParserInterface    $dataParser,
        private readonly LoggerInterface        $logger
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            $data = $this->dataParser->parse();
//
            $this->dataPersister->persist($data);

            return Command::SUCCESS;
        } catch (\Exception $e) {
            $this->logger->error($e->getMessage());

            return Command::FAILURE;
        }
    }
}


