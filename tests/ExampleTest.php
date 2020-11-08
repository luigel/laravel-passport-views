<?php

namespace Luigel\LaravelPassportViews\Tests;

use Luigel\LaravelPassportViews\LaravelPassportViewsServiceProvider;
use Orchestra\Testbench\TestCase;

class ExampleTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [LaravelPassportViewsServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
