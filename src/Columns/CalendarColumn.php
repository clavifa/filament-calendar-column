<?php

namespace Clavifa\FilamentCalendarColumn\Columns;

use Filament\Tables\Columns\ViewColumn;

class CalendarColumn extends ViewColumn
{
    protected string $view = 'filament-calendar-column::columns.calendar';

    protected string $calendarColor = '#FFFFFF';

    protected string $calendarBackground = '#82b484';

    protected string $timeColor = '#111827';

    protected string $timeBackground = '#c4dfc5';

    protected bool $showTime = true;

    protected string $monthFormat = 'M';

    protected string $timeFormat = 'H:i';

    protected string $monthLocale = 'pt_BR';

    protected function setUp(): void
    {
        parent::setUp();

        $this->view($this->view);
    }

    public function calendarColor(string $color): static
    {
        $this->calendarColor = $color;

        return $this;
    }

    public function calendarBackground(string $color): static
    {
        $this->calendarBackground = $color;

        return $this;
    }

    public function timeColor(string $color): static
    {
        $this->timeColor = $color;

        return $this;
    }

    public function timeBackground(string $color): static
    {
        $this->timeBackground = $color;

        return $this;
    }

    public function showTime(bool $show = true): static
    {
        $this->showTime = $show;

        return $this;
    }

    public function monthFormat(string $format): static
    {
        $this->monthFormat = $format;

        return $this;
    }

    public function timeFormat(string $format): static
    {
        $this->timeFormat = $format;

        return $this;
    }

    public function monthLocale(string $locale): static
    {
        $this->monthLocale = $locale;

        return $this;
    }

    public function getCalendarColor(): string
    {
        return $this->calendarColor;
    }

    public function getCalendarBackground(): string
    {
        return $this->calendarBackground;
    }

    public function getTimeColor(): string
    {
        return $this->timeColor;
    }

    public function getTimeBackground(): string
    {
        return $this->timeBackground;
    }

    public function getShowTime(): bool
    {
        return $this->showTime;
    }

    public function getMonthFormat(): string
    {
        return $this->monthFormat;
    }

    public function getTimeFormat(): string
    {
        return $this->timeFormat;
    }

    public function getMonthLocale(): string
    {
        return $this->monthLocale;
    }
}
