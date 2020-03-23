<?php


namespace Lightit\Automizr\Contracts;

use Lightit\Automizr\Pipeline;

/**
 * This contract defines how Automizr class is going to work
 * Interface AutomizrContract
 * @package Lightit\Automizr\app\Contracts
 */
interface AutomizrContract
{
    /**
     * Returns a new Pipeline instance
     * @param string $name
     * @return Pipeline
     */
    public function pipeline(string $name): Pipeline;
}
