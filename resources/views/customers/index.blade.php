<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customers') }}
        </h2>
    </x-slot>

    <div class="flex mx-auto py-8">
        <div class="flex max-w-full mx-auto mb-5 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-md">
                <div class="container mx-auto px-4 sm:px-8 max-w-10xl">
                    <div class="py-8">
                        @if(session()->has('message'))
                            <div class="bg-green-200 border-green-600 rounded-md text-green-600 border-l-4 p-4 mb-4" role="alert">
                                <p>
                                    {{ session()->get('message') }}
                                </p>
                            </div>
                        @endif
                        <div class="flex flex-row mb-1 sm:mb-0 items-center justify-between w-full">
                            <h2 class="text-2xl font-heading font-medium leading-tight">
                                Customers
                            </h2>
                            <div class="flex">
                                <a href="/customers/create" class="text-white bg-green-500 mr-6 px-3 py-1 rounded-md hover:bg-green-600">
                                + New Customer
                                </a>
                                @include('customers._index-filter')
                            </div>
                        </div>
                        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                                <table class="min-w-full leading-normal">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">
                                                First Name
                                            </th>
                                            <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">
                                                Last Name
                                            </th>
                                            <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">
                                                Email
                                            </th>
                                            <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">
                                                Phone
                                            </th>
                                            <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">
                                                State
                                            </th>
                                            <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">
                                                Customer Since
                                            </th>
                                            <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">
                                                Status
                                            </th>
                                            <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">
                                                Last Activity
                                            </th>
                                            <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customers as $customer)
                                            <tr>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <a href="{{ URL::to('customers/' . $customer->id) }}" class="text-gray-900 whitespace-no-wrap">
                                                        {{ $customer->first_name }}
                                                    </a>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <a href="{{ URL::to('customers/' . $customer->id) }}" class="text-gray-900 whitespace-no-wrap">
                                                        {{ $customer->last_name }}
                                                    </a>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        {{ $customer->email }}
                                                    </p>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        {{ $customer->mobile_phone }}
                                                    </p>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        {{ $customer->state }}
                                                    </p>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        {{ $customer->created_at }}
                                                    </p>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                        <span aria-hidden="true" class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                                        </span>
                                                        <span class="relative">
                                                            {{ $customer->status }}
                                                        </span>
                                                    </span>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        {{ $customer->created_at }}
                                                    </p>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <a href="{{ URL::to('customers/' . $customer->id) }}" class="text-blue-600 hover:text-blue-900">
                                                        View
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="px-5 bg-white py-5 flex flex-col xs:flex-row items-center xs:justify-between">
                                    {{ $customers->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</x-app-layout>