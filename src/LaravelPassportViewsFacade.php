<?php

namespace Luigel\LaravelPassportViews;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Luigel\LaravelPassportViews\Skeleton\SkeletonClass
 */
class LaravelPassportViewsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-passport-views';
    }
}
