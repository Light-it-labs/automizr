<?php


namespace Lightit\Automizr\Translators;

use Lightit\Automizr\Job;
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
        $this->body = [
            'version' => '2',
            'jobs' => $this->prepareJobs()
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
            /** @var Job $job */
            // Set initial job names
            $jobs[$job->name()] = $job->name();
            // Insert docker image details
            if($job->image() !== null) {
                $jobs[$job->name()] = [
                    'docker' => [
                        'image' => $job->image()
                    ],
                    'steps' => []
                ];
            }
            // Job steps
            // If a docker image has not been specified
            if(! isset($jobs[$job->name()]['docker'])) {
                // Create steps key
                $jobs[$job->name()]['steps'] = [];
            }
            array_push($jobs[$job->name()]['steps'], [
                'checkout' => [],
                'run' => [
                    'name' => 'Install CURL',
                    'command' => 'apt update && apt install curl -y'
                ]
            ]);
        }

        return $jobs;
    }
}
