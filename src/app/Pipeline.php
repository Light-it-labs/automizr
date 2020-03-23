<?php


namespace Lightit\Automizr;


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
    public function job(string $name): Pipeline
    {
        array_push($this->jobs, new Job($name));

        return $this;
    }
}
