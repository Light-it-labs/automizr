<?php


namespace Lightit\Automizr\Contracts;

use Closure;
use Lightit\Automizr\Job;
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
     * @param Closure $closure
     * @return mixed
     */
    public function job(string $name, Closure $closure): Pipeline;

    /**
     * Return all defined jobs
     * @return array
     */
    public function jobs(): array;
}
