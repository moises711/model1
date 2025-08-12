<x-filament-widgets::widget>
    <x-filament::section>
        <h2 class="text-lg font-bold mb-4 capitalize">{{ $currentMonth }}</h2>

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
            {{-- Espacios antes del primer día para que empiece en el día correcto --}}
            @for ($i = 0; $i < $startDayOfWeek; $i++)
                <div>
        </div>
        @endfor

        {{-- Días del mes --}}
        @for ($day = 1; $day <= $daysInMonth; $day++)
            @php
            $dateString=\Carbon\Carbon::now()->startOfMonth()->addDays($day - 1)->format('Y-m-d');
            $hasEvent = in_array($dateString, $eventDates);
            @endphp
            <div class="p-2 border rounded text-center cursor-pointer select-none
                    @if($hasEvent)
                        bg-blue-600 text-white border-blue-800 font-semibold
                    @else
                        border-gray-300 text-gray-800 hover:bg-gray-100
                    @endif
                ">
                {{ $day }}
            </div>
            @endfor
            </div>
    </x-filament::section>
</x-filament-widgets::widget>