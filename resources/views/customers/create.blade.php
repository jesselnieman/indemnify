<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CreateCustomer') }}
        </h2>
    </x-slot>

    <section class="py-8 bg-gray-100 bg-opacity-50 w-screen h-full">
        <form method="post" enctype="multipart/form-data" action="/customers" class="mx-auto container max-w-6xl md:w-3/4 shadow-md">
            @csrf
            @method('post')

            <div class="flex justify-between bg-gray-100 p-4 border-t-2 bg-opacity-5 border-green-600 rounded-lg">
                <div class="max-w-sm mx-auto md:w-full md:mx-0"> 
                    <h1 class="text-gray-600">
                        New Customer
                    </h1>
                </div>
                <a class="text-red-500" href="/customers">
                    Cancel
                </a>
            </div>

            <div class="bg-white space-y-6">
                <!-- General Information Section -->
                <div class="grid md:grid-cols-4 sm:grid-cols-2 gap-4 p-4 text-gray-500">
                    <div class="md:col-span-4 sm:col-span-1 pt-4">
                        General Info
                    </div>
                    @include('customers._general-info-form')
                </div>

                <hr/>

                <!-- Agency Information Section -->
                <div class="grid md:grid-cols-4 sm:grid-cols-2 gap-4 p-4 text-gray-500">
                    <div class="md:col-span-4 sm:col-span-1 pt-2">
                        Agency Info
                    </div>
                    @include('customers._agency-info-form')
                </div>

                <hr/>

                <!-- Demographics Section -->
                <div class="grid md:grid-cols-4 sm:grid-cols-2 gap-4 p-4 text-gray-500">
                    <div class="md:col-span-4 sm:col-span-1 pt-2">
                        Demographics
                    </div>
                    @include('customers._demographics-form')
                </div>

                <hr/>

                <!-- Driver Information Section -->
                <div class="grid md:grid-cols-4 sm:grid-cols-2 gap-4 p-4 text-gray-500">
                    <div class="md:col-span-4 sm:col-span-1 pt-2">
                        Driver Information
                    </div>
                    @include('customers._driver-info-form')
                </div>

                <hr/>

                <div class="w-full md:w-1/3 px-4 py-6 mx-auto text-gray-500">
                    <button type="submit" class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 ">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </section>
</x-app-layout>
