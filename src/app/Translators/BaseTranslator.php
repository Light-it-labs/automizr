<?php


namespace Lightit\Automizr\Translators;

use Lightit\Automizr\Automizr;
use stdClass;

/**
 * A translator is the class that transforms an Automizr Pipeline into a Service defined pipeline
 * Class BaseTranslator
 * @package Lightit\Automizr\Translators
 */
class BaseTranslator
{
    /** @var array $body  */
    protected $body = [];

    /** @var Automizr $pipeline */
    protected $pipeline;

    public function __construct(Automizr $pipeline)
    {
        $this->pipeline = $pipeline;
    }

    /**
     * Generates a yaml representation of the pipeline body
     * @return string
     */
    public function generate(): string
    {
        return yaml_emit($this->body);
    }
}
