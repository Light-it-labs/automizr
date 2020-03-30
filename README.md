# Automizr

This package will allow you to create service agnostic pipelines

## Installation
You can install this package via composer
`composer require lightit/automizr`

## Usage
Create a new Pipeline class extending Lightit\Automizr\Automizr class:

```php
class ExamplePipeline extends Automizr
{
    /** @var Pipeline $examplePipeline */
    private $examplePipeline;

    public function __construct()
    {
        $this->boot();
    }

    /**
     * Boot the pipeline
     */
    private function boot(): void
    {
        $this->examplePipeline = $this->pipeline('Continuous Integration - Delivery Pipeline')
            ->job('clone_repository', function(Step $step) {
                $step->command([
                    'name' => 'git_clone',
                    'command' => 'git clone https://github.com/test.git'
                ]);

                $step->command([
                    'name' => 'Say Hello',
                    'command' => 'echo Hello World'
                ]);

                return $step->recipe();
            }, 'ubuntu:18.04')
            ->job('install_dependencies', function (Step $step) {
                $step->command([
                    'name' => 'npm_install',
                    'command' => 'npm install'
                ]);

                return $step->recipe();
            }, 'ubuntu:18.04');
    }

    /**
     * Return the current Pipeline
     * @return Pipeline
     */
    public function instance(): Pipeline
    {
        return $this->examplePipeline;
    }
}
```

## About Lightit
[Light-it](https://lightit.io) is a digital product development studio with offices in the US, Uruguay and Paraguay.

<img src="https://avatars1.githubusercontent.com/u/39625568?s=200&v=4" width="48">

## License
This project and the Laravel framework are open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
