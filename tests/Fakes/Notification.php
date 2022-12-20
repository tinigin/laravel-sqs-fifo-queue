<?php

namespace Tinigin\LaravelSqsFifoQueue\Tests\Fakes;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Tinigin\LaravelSqsFifoQueue\Bus\SqsFifoQueueable;
use Illuminate\Notifications\Notification as BaseNotification;

class Notification extends BaseNotification implements ShouldQueue
{
    use Queueable, SqsFifoQueueable;

    //
}
