<?php


namespace Lightit\Automizr;


use Lightit\Automizr\Contracts\JobContract;

class Job implements JobContract
{

    /**
     * @inheritDoc
     */
    public function step(string $name): Step
    {
        // TODO: Implement step() method.
    }
}
