<?php


namespace Lightit\Automizr\Tests\app;


use Lightit\Automizr\Pipelines\ExamplePipeline;
use Lightit\Automizr\Tests\BaseTest;
use Lightit\Automizr\Translators\CircleCiTranslator;

class ExamplePipelineTest extends BaseTest
{
    public function test_example_pipeline()
    {
        $pipeline = new ExamplePipeline();

        // Check pipeline data
        $jobs = $pipeline->instance()->jobs();
        $firstJobSteps = $jobs[0]->steps();
        $secondJobSteps = $jobs[1]->steps();

        //die(var_dump(new CircleCiTranslator($pipeline)));

        $this->assertCount(2, $jobs);
        $this->assertCount(2, $firstJobSteps);
        $this->assertCount(1, $secondJobSteps);
    }
}
