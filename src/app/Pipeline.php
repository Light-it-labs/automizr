<?php


namespace Lightit\Automizr;


use Lightit\Automizr\Contracts\PipelineContract;

class Pipeline implements PipelineContract
{

    /**
     * @inheritDoc
     */
    public function using(string $image): Pipeline
    {
        // TODO: Implement using() method.
    }

    /**
     * @inheritDoc
     */
    public function job(string $name): Job
    {
        // TODO: Implement job() method.
    }
}
