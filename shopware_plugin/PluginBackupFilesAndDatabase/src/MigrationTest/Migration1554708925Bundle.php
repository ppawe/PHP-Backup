<?php

/*declare(strict_types=1);

namespace Swag\PluginBackupFilesAndDatabase\MigrationTest;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\MigrationTest\MigrationStep;

class Migration1554708925Bundle extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1554708925;
    }

    public function update(Connection $connection): void
    {
        $connection->executeQuery(
            "CREATE TABLE IF NOT EXISTS 'swag_backup' (
                'id' BINARY(16) NOT NULL,
                'name' VARCHAR(255) NOT NULL,
                'description' VARCHAR(255) NOT NULL,
                'date' DATETIME(3) NOT NULL       
            )"
        );
    }

    public function updateDestructive(Connection $connection): void
    {
    }
}