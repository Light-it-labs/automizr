<?php


namespace Lightit\Automizr\Translators;


use Lightit\Automizr\Automizr;

/**
 * Transforms an Automizr pipeline into a CircleCi compatible pipeline
 * Class CircleCiTranslator
 * @package Lightit\Automizr\Translators
 */
class CircleCiTranslator extends BaseTranslator
{
    public function __construct(Automizr $pipeline)
    {
        parent::__construct($pipeline);
        $this->design();
    }

    /**
     * Design the body of the pipeline
     */
    private function design(): void
    {
        $this->body = [
            'version' => '2.1'
        ];
    }
}