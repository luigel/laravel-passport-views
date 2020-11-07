<?php

namespace Luigel\LaravelPassportViews\Tests;

use Orchestra\Testbench\TestCase;
use Luigel\LaravelPassportViews\LaravelPassportViewsServiceProvider;

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
