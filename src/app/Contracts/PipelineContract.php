<?php


namespace Lightit\Automizr\Contracts;

use Lightit\Automizr\Pipeline;

/**
 * Interface PipelineContract
 * @package Lightit\Automizr\Contracts
 */
interface PipelineContract
{
    /**
     * Defines which Docker image have to be used fon the Pipeline
     * @param string $image
     * @return Pipeline
     */
    public function using(string $image): Pipeline;

    /**
     * Defines a new Job instance
     * @param string $name
     * @return mixed
     */
    public function job(string $name);
}
