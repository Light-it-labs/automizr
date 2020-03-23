<?php


namespace Lightit\Automizr\Contracts;


use Lightit\Automizr\Step;

interface StepContract
{
    /**
     * Adds a command to the current step
     * @param string $command
     * @return Step
     */
    public function command(string $command): Step;

    /**
     * Adds a set of commands to the current instance
     * @param array $commands
     * @return Step
     */
    public function commands(array $commands): Step;
}
