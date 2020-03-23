<?php


namespace Lightit\Automizr\Contracts;


use Lightit\Automizr\Step;

interface JobContract
{
    /**
     * Defines a Job Step
     * @param string $name
     * @return Step
     */
    public function step(string $name): Step;
}
