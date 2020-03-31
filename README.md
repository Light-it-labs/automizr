# Automizr

This package will allow you to create service agnostic pipelines

## Installation
You can install this package via composer
`composer require lightit/automizr`

## Usage
Create a new Pipeline class extending Lightit\Automizr\Automizr class:

Example Pipeline:
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

Cool, now that you have your pipeline class is easy to transform the result into any of the compatible CI services.
The classes that performs these transformations are called `Translators` and by concept, gets all the object definitions
of the `Pipeline` and generates CI compatible string.

``$translator = new CircleCiTranslator($pipeline->instance()); // Transform your pipeline to a CircleCi compatible instance``

To get the yml from the translator, call the ``generate()`` method

``$translator->generate()``

And that's it! This will output your circleCI compatible `.yml`

## Available API
The main goal of this API is to provide a predictable and easy to use Pipeline designer oriented syntax.

Here is a list of the methods provided by the package that will allow you to create a service agnostic pipeline.

#### Methods
`$pipeline = $this->automizr->pipeline(string $name)`
Creates a new Pipeline class instance

---
`/** @var Pipeline $pipeline **/`

`$pipeline->job(string $name, Closure $closure, string $dockerImageName)`

This method defines a new pipeline job. The second parameter is a callback function that receive and object of the class `Step`

---

`/** @var Step $step **/`

`$step->command(array $command)` this method allows you to define a Step command. The array must
contain a `name` and a `command` keys as following:

``
$step->command([
    'name' => 'Say Hello',
    'command' => 'echo Hello World'
]);
``

---

## Project TODOS:

- Create more Translators

- Allow parallel Jobs

- Use global docker images

## About Light-it
[Light-it](https://lightit.io) is a digital product development studio with offices in the US, Uruguay and Paraguay.

<img src="https://avatars1.githubusercontent.com/u/39625568?s=200&v=4" width="48">

## License
This project and the Laravel framework are open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
