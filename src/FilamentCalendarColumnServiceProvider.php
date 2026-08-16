<?php

namespace Clavifa\FilamentCalendarColumn;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCalendarColumnServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-calendar-column';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews();
    }
}
