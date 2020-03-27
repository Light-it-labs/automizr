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

    /**
     * Return the current job name
     * @return string
     */
    public function name(): string;

    /**
     * Return the current job docker image
     * @return string|null
     */
    public function image(): ?string;
}
