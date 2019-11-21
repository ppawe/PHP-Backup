<?php declare(strict_types=1);

namespace Swag\PluginBackupFilesAndDatabase\Backup;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void              add(BackupEntity $entity)
 * @method void              set(string $key, BackupEntity $entity)
 * @method BackupEntity[]    getIterator()
 * @method BackupEntity[]    getElements()
 * @method BackupEntity|null get(string $key)
 * @method BackupEntity|null first()
 * @method BackupEntity|null last()
 */
class BackupEntityCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return BackupEntity::class;
    }
}
