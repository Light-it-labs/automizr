<?php


namespace Lightit\Automizr;


use Lightit\Automizr\Contracts\StepContract;

class Step implements StepContract
{
    /** @var array $commands */
    private $commands = [];

    /**
     * @inheritDoc
     */
    public function command(array $command): Step
    {
        array_push($this->commands, $command);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function commands(array $commands): Step
    {
        array_merge($this->commands, $commands);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function recipe(): array
    {
        return $this->commands;
    }
}
