<?php


namespace Lightit\Automizr;


use Lightit\Automizr\Contracts\JobContract;

class Job implements JobContract
{
    /** @var string $name */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @inheritDoc
     */
    public function step(string $name): Step
    {
        // TODO: Implement step() method.
    }
}
