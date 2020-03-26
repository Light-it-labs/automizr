<?php


namespace Lightit\Automizr;


use Closure;
use Lightit\Automizr\Contracts\PipelineContract;

class Pipeline implements PipelineContract
{
    /** @var string $image */
    private $image;

    /** @var array $jobs */
    private $jobs = [];

    /**
     * @inheritDoc
     */
    public function using(string $image): Pipeline
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function job(string $name, Closure $closure, string $image = null): Pipeline
    {
        array_push($this->jobs, new Job($name, $closure, $image));

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function jobs(): array
    {
        return $this->jobs;
    }
}
