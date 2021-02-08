<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Container -->
    <div class="max-w-screen-xl mx-auto px-4 pt-4">
        <!-- Grid wrapper -->
        <div class="-mx-4 flex flex-wrap">
            <!-- Grid column -->
            <div class="w-full flex flex-col p-4 sm:w-1/2 lg:w-1/3">
                <!-- Column contents -->
                <div class="flex-1 px-5 py-6 bg-white rounded-lg shadow-lg">
                    <!-- Card contents -->
                    Contents
                </div>
            </div>

            <!-- Grid column -->
            <div class="w-full flex flex-col p-4 sm:w-1/2 lg:w-1/3">
                <!-- Column contents -->
                <div class="flex-1 px-5 py-6 bg-white rounded-lg shadow-lg">
                    <!-- Card contents -->
                    Contents
                </div>
            </div>

            <!-- Grid column -->
            <div class="w-full flex flex-col p-4 sm:w-1/2 lg:w-1/3">
                <!-- Column contents -->
                <div class="flex-1 px-5 py-6 bg-white rounded-lg shadow-lg">
                    <!-- Card contents -->
                    Contents
                </div>
            </div>

            <!-- Grid column -->
            <div class="w-full flex flex-col p-4 sm:w-1/2 lg:w-1/3">
                <!-- Column contents -->
                <div class="flex-1 px-5 py-6 bg-white rounded-lg shadow-lg">
                    <!-- Card contents -->
                    Contents
                </div>
            </div>
        </div>
    </div>
</x-app-layout>