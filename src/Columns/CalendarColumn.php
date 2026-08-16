<?php

namespace Clavifa\FilamentCalendarColumn\Columns;

use Filament\Tables\Columns\ViewColumn;

class CalendarColumn extends ViewColumn
{
    protected string $view = 'filament-calendar-column::columns.calendar';

    protected function setUp(): void
    {
        parent::setUp();

        $this->view($this->view);
    }
}
