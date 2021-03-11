<?php
declare(strict_types=1);

namespace App\Messenger\Handler;

use App\Messenger\Envelope\Statistics;
use Doctrine\DBAL\Connection;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

final class StatisticsHandler implements MessageHandlerInterface
{
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @throws \Doctrine\DBAL\Exception
     */
    public function __invoke(Statistics $message)
    {
        $result = $this->connection->executeStatement(
            'UPDATE stats_messenger SET count = count + 1 WHERE date = ?',
            [date('Y-m-d')]
        );

        if ($result === 0) {
            $this->connection->insert(
                'stats_messenger',
                [
                    'count' => 1,
                    'date' => date('Y-m-d'),
                ]
            );
        }
    }
}
