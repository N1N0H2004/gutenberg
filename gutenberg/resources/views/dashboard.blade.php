<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Database structuur: ------
titel ------
inhoud ------
slug = het stukje van de url waar de pagina staat (bijv. overons of contact) ------

Als bovenstaande kan dan moet het geparsed worden naar HTML en dan kan ik
gwn die pagina bezoeken door de SLUG te gebruiken in de URL
") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
