<?php declare(strict_types=1);

namespace Dadekavan\Career\Tasks\Scheduled;

use Shopware\Core\Framework\MessageQueue\ScheduledTask\ScheduledTaskHandler;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler(handles: First::class)]
class FirstHandler extends ScheduledTaskHandler
{
    public function run(): void
    {
        file_put_contents('/tmp/First.log',"\n".date('H:i:s'),FILE_APPEND);
    }
}