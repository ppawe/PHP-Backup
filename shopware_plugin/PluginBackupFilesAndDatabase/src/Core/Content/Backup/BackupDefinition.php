<?php

declare(strict_types=1);

namespace Swag\PluginBackupFilesAndDatabase\Core\Content\Backup;

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class BackupDefinition extends EntityDefinition
{
    public const ENTITY_NAME = "swag_backup";

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return BundleEntity::class;
    }

    public function getCollectionClass(): string
    {
        return BundleCollection::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField("id","id"))->addFlags(new Required(), new PrimaryKey()),
            (new StringField("name","backupName"))->addFlags(new Required()),
            (new StringField("description","description"))->addFlags(new Required()),
        ]);
    }

}