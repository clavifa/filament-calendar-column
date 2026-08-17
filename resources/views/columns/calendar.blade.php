@php
$date = $getState();
@endphp

@if (!blank($date))
<div
    style="
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 4px;
        width: 65px;
        padding: 5px;
    ">
    <div
        style="
            width: 55px;
            height: 55px;
            overflow: hidden;
            border: 1px solid #e5e7eb;
            border-radius: 7px;
            background: #ffffff;
            text-align: center;
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        ">
        {{-- ANO --}}
        <div
            style="
                height: 15px;
                display: flex;
                align-items: center;
                justify-content: center;
                background: {{ $getCalendarBackground() }};
                color: {{ $getCalendarColor() }};
                font-size: 11px;
                font-weight: 700;
                line-height: 15px;
                letter-spacing: .5px;
            ">
            {{ $date?->format('Y') }}
        </div>

        {{-- DIA + MÊS --}}
        <div
            style="
                height: 39px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            ">
            <div
                style="
                    color: #111827;
                    font-size: 20px;
                    font-weight: 700;
                    line-height: 20px;
                ">
                {{ $date?->format('d') }}
            </div>

            <div
                style="
                    margin-top: 2px;
                    color: #6b7280;
                    font-size: 10px;
                    font-weight: 600;
                    text-transform: uppercase;
                    line-height: 10px;
                ">
                {{ $date ? ucfirst($date->locale($getMonthLocale())->translatedFormat($getMonthFormat())) : '' }}
            </div>
        </div>
    </div>

    {{-- HORA --}}
    @if ($getShowTime() && $date)
    <div
        style="
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 3px;
                padding: 2px 6px;
                border-radius: 9999px;
                background: {{ $getTimeBackground() }};
                color: {{ $getTimeColor() }};
                font-size: 11px;
                font-weight: 600;
                line-height: 14px;
                white-space: nowrap;
            ">
        <x-heroicon-o-clock
            style="
                    width: 11px;
                    height: 11px;
                    flex-shrink: 0;
                " />

        {{ $date->format($getTimeFormat()) }}
    </div>
    @endif
</div>
@endif