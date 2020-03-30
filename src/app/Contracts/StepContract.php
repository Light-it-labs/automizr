<?php


namespace Lightit\Automizr\Contracts;


use Lightit\Automizr\Step;

interface StepContract
{
    /**
     * Adds a command to the current step
     * @param array $command
     * @return Step
     */
    public function command(array $command): Step;

    /**
     * Adds a set of commands to the current instance
     * @param array $commands
     * @return Step
     */
    public function commands(array $commands): Step;

    /**
     * Return all the step commands
     * @return array
     */
    public function recipe(): array;
}
