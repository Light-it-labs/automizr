<?php


namespace Lightit\Automizr;


use Closure;
use Lightit\Automizr\Contracts\JobContract;

class Job implements JobContract
{
    /** @var string $name */
    private $name;

    /** @var array $steps */
    private $steps;

    /** @var string image */
    private $image = null;

    public function __construct(string $name, Closure $steps, string $image = null)
    {
        $this->name = $name;
        $this->steps = $steps($this->newStep());
        $this->image = $image;
    }

    /**
     * Step factory
     * @return Step
     */
    private function newStep(): Step
    {
        return new Step();
    }

    /**
     * @inheritDoc
     */
    public function steps(): array
    {
        return $this->steps;
    }

    /**
     * @inheritDoc
     */
    public function image(): ?string
    {
        return $this->image;
    }
}
