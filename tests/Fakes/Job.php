<?php

namespace Tinigin\LaravelSqsFifoQueue\Tests\Fakes;

use Tinigin\LaravelSqsFifoQueue\Bus\SqsFifoQueueable;

class Job
{
    use SqsFifoQueueable;
}
