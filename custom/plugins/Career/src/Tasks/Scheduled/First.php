<?php declare(strict_types=1);

namespace Dadekavan\Career\Tasks\Scheduled;

use Shopware\Core\Framework\MessageQueue\ScheduledTask\ScheduledTask;

class First extends ScheduledTask
{
    public static function getTaskName(): string
    {
        return 'career.first';
    }

    public static function getDefaultInterval(): int
    {
        return 10; // 5 minutes
    }
}