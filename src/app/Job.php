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

    public function __construct(string $name, Closure $steps)
    {
        $this->name = $name;
        $this->steps = $steps($this->newStep());
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
}
