<?php declare(strict_types=1);

namespace Swag\PluginBackupFilesAndDatabase\Backup;

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
    protected $filePath;

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
    public function getFilePath(): string
    {
        return $this->filePath;
    }

    /**
     * @param string $filePath
     */
    public function setFilePath(string $filePath): void
    {
        $this->filePath = $filePath;
    }

}