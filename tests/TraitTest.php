<?php

namespace Tinigin\LaravelSqsFifoQueue\Tests;

use Tinigin\LaravelSqsFifoQueue\Tests\Fakes\Job;

class TraitTest extends TestCase
{
    public function test_trait_can_set_message_group_id()
    {
        $job = new Job();

        $job->onMessageGroup('test');

        $this->assertEquals('test', $job->messageGroupId);
    }
}
