<?php
declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210310140228 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        $sql = <<<SQL
CREATE TABLE IF NOT EXISTS stats_messenger (
    id SERIAL PRIMARY KEY,
    date DATE,
    count INTEGER
);
SQL;
        $this->connection->executeStatement($sql);
    }

    public function down(Schema $schema): void
    {
        $sql = <<<SQL
DROP TABLE IF EXISTS stats_messenger;
SQL;
        $this->connection->executeStatement($sql);
    }
}
