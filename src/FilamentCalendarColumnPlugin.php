<?php

namespace Clavifa\FilamentCalendarColumn;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentCalendarColumnPlugin implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'filament-calendar-column';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
