<?php


namespace Lightit\Automizr\Tests;

use Lightit\Automizr\Providers\AutomizrServiceProvider;
use Orchestra\Testbench\TestCase;

class BaseTest extends TestCase
{
    /**
     * {@inheritdoc}
     */
    protected function getPackageProviders($app)
    {
        return [AutomizrServiceProvider::class];
    }
}
