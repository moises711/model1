<?php

namespace App\Filament\Widgets;

use App\Models\Calendario;
use Carbon\Carbon;
use Filament\Widgets\Widget;
use Illuminate\Contracts\View\View;

class CalendarioWidget extends Widget
{
    protected static string $view = 'filament.widgets.calendario-widget';

    public function render(): View
    {
        $currentDate = Carbon::create(2025, 8, 1); // Cambia si quieres mes dinámico

        $eventDates = Calendario::pluck('fecha')
            ->map(fn($fecha) => Carbon::parse($fecha)->format('Y-m-d'))
            ->toArray();

        return view(static::$view, [
            'eventDates' => $eventDates,
            'currentMonth' => $currentDate->locale('es')->isoFormat('MMMM YYYY'),
            'startDayOfWeek' => $currentDate->copy()->startOfMonth()->dayOfWeek,
            'daysInMonth' => $currentDate->daysInMonth,
            'currentDate' => $currentDate,
        ]);
    }
}
