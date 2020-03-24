<?php


namespace Lightit\Automizr\Pipelines;


use Lightit\Automizr\Automizr;
use Lightit\Automizr\Step;

class ExamplePipeline extends Automizr
{
    public function design()
    {
        $this->pipeline('Continuous Integration - Delivery Pipeline')
            ->using('ubuntu:18.04')
            ->job('Clone Repository', function(Step $step) {
                $step->command('git clone https://github.com/test.git');
                $step->command('echo Hello World');

                return $step->recipe();
            })->job('Install Dependencies', function (Step $step) {
                $step->command('npm install');

                return $step->recipe();
            });
    }
}
