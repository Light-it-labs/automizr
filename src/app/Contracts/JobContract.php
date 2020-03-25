<?php


namespace Lightit\Automizr\Contracts;


use Lightit\Automizr\Step;

interface JobContract
{
    /**
     * Get all job steps
     * @return array
     */
    public function steps(): array;
}
