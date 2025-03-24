<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-flow-row grid-cols-2 grid-row-4 gap-8">
                <div class="row-span-4 bg-white dark:bg-dark-blue overflow-hidden shadow-sm sm:rounded-lg">
                    <a href="{{ route('cars.index') }}">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <h2>Carros</h2>
                        </div>
                    </a>
                </div>

                <div class="row-span-4 bg-white dark:bg-dark-blue overflow-hidden shadow-sm sm:rounded-lg">
                    <a href="">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <h2>Marcas</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
