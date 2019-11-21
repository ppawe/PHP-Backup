<?php declare(strict_types=1);

namespace Swag\PluginBackupFilesAndDatabase\Backup;

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class BackupEntityDefinition extends EntityDefinition
{
    public function getEntityName(): string
    {
        return 'backup_entity';
    }

    public function getCollectionClass(): string
    {
        return BackupEntityCollection::class;
    }

    public function getEntityClass(): string
    {
        return BackupEntity::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField("id","id"))->addFlags(new PrimaryKey(), new Required()),
            new StringField("backup_name", "backupName"),
            new StringField("file_path", "filePath"),
        ]);
    }
}
