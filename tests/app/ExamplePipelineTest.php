<?php


namespace Lightit\Automizr\Tests\app;


use Lightit\Automizr\Pipelines\ExamplePipeline;
use Lightit\Automizr\Tests\BaseTest;

class ExamplePipelineTest extends BaseTest
{
    public function test_example_pipeline()
    {
        $pipeline = new ExamplePipeline();

        // Check pipeline data
        $jobs = $pipeline->instance()->jobs();

        $this->assertCount(2, $jobs);
    }
}
