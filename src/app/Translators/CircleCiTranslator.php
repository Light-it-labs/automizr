<?php


namespace Lightit\Automizr\Translators;

use Lightit\Automizr\Pipeline;

/**
 * Transforms an Automizr pipeline into a CircleCi compatible pipeline
 * Class CircleCiTranslator
 * @package Lightit\Automizr\Translators
 */
class CircleCiTranslator extends BaseTranslator
{
    public function __construct(Pipeline $pipeline)
    {
        parent::__construct($pipeline);
        $this->design();
    }

    /**
     * Design the body of the pipeline
     */
    private function design(): void
    {
        $jobs = $this->prepareJobs();
        $this->body = [
            'version' => '2',
            'jobs' => [
                'build' => [
                    'docker' => [
                        [
                            'image' => 'ubuntu:18.04'
                        ]
                    ],
                    'steps' => [
                        'checkout',
                        [
                            'run' => [
                                'name' => 'Install CURL',
                                'command' => 'apt update && apt install curl -y'
                            ]
                        ]
                    ]
                ]
            ],
            'workflows' => [
                'version' => '2',
                'install_dependencies_and_build' => [
                    'jobs' => [
                        'build'
                    ]
                ]
            ]
        ];
    }

    /**
     * Return an array of the current pipeline jobs with the translator format
     * @return array
     */
    private function prepareJobs(): array
    {
        $jobs = [];
        foreach($this->pipeline->jobs() as $job) {
            
        }
    }
}
