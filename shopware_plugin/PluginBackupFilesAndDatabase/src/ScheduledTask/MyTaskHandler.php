<?php

declare(strict_types=1);

namespace Swag\PluginBackupFilesAndDatabase\ScheduledTask;

use Shopware\Core\Framework\ScheduledTask\ScheduledTaskHandler;

class MyTaskHandler extends ScheduledTaskHandler
{
    public static function getHandledMessages(): iterable
    {
        return [MyTask::class];
    }

    public function run(): void
    {
        echo "Do stuff";
    }
}