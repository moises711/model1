<x-filament-widgets::widget>
    <x-filament::section>
        <h2 class="text-lg font-bold mb-4">{{ $currentMonth }}</h2>

        <div class="grid grid-cols-7 gap-1 text-center font-semibold mb-2">
            <div>Dom</div>
            <div>Lun</div>
            <div>Mar</div>
            <div>Mié</div>
            <div>Jue</div>
            <div>Vie</div>
            <div>Sáb</div>
        </div>

        <div class="grid grid-cols-7 gap-1">
            {{-- Espacios en blanco antes del primer día --}}
            @for ($i = 0; $i < $startDayOfWeek; $i++)
                <div>
        </div>
        @endfor

        {{-- Días del mes --}}
        @for ($day = 1; $day <= $daysInMonth; $day++)
            @php
            // Genera la fecha completa para el día actual del mes
            $dateString=\Carbon\Carbon::createFromFormat('Y-m-d', now()->format('Y-m-') . str_pad($day, 2, '0', STR_PAD_LEFT))->format('Y-m-d');
            // Verifica si existe un evento en esa fecha
            $hasEvent = in_array($dateString, $eventDates);
            @endphp

            <div
                class="p-2 border text-center rounded cursor-pointer select-none
                        @if($hasEvent)
                            bg-blue-600 text-white border-blue-800
                        @else
                            border-gray-300 text-gray-800
                        @endif
                    ">
                {{ $day }}
            </div>
            @endfor
            </div>
    </x-filament::section>
</x-filament-widgets::widget>