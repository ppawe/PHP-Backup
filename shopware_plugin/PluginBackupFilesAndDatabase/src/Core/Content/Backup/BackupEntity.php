<?php

declare(strict_types=1);

namespace Swag\PluginBackupFilesAndDatabase\Core\Content\Backup;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

class BackupEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var string
     */
    protected $backupName;

    /**
     * @var string
     */
    protected $description;

    /**
     * @return string
     */
    public function getBackupName(): string
    {
        return $this->backupName;
    }

    /**
     * @param string $backupName
     */
    public function setBackupName(string $backupName): void
    {
        $this->backupName = $backupName;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }



}