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
        // Obtenemos todas las fechas de eventos del mes actual en formato Y-m-d
        $eventDates = Calendario::pluck('fecha')
            ->map(fn($fecha) => Carbon::parse($fecha)->format('Y-m-d'))
            ->toArray();

        return view(static::$view, [
            'eventDates' => $eventDates,
            'currentMonth' => now()->locale('es')->isoFormat('MMMM YYYY'),
            'startDayOfWeek' => now()->startOfMonth()->dayOfWeek, // Domingo=0, Lunes=1,...
            'daysInMonth' => now()->daysInMonth,
        ]);
    }
}
