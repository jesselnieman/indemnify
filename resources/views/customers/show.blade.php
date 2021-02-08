<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customers') }}
        </h2>
    </x-slot>

    <div class="flex mx-auto py-2">
        <div class="flex max-w-full mx-auto mb-5 sm:px-6 lg:px-8">

            <div class="container mx-auto my-5 p-5 rounded-md">
                @if(session()->has('message'))
                    <div class="bg-green-200 border-green-600 rounded-md text-green-600 border-l-4 p-4 mb-4" role="alert">
                        <p>
                            {{ session()->get('message') }}
                        </p>
                    </div>
                @endif
                <div class="md:flex no-wrap md:mx-2 rounded-md">
                    <!-- Left Side -->
                    <div class="w-full md:w-3/12 md:mx-2">
                        <!-- Profile Card -->
                        <div class="bg-white p-3 border-t-4 border-blue-400 rounded-md">
                            <div class="flex items-center justify-between">
                                <h1 class="text-gray-900 font-heading font-bold text-xl leading-8 my-1">{{ $customer->first_name . ' ' . $customer->last_name }}</h1>
                                <a href="{{ URL::to('customers/' . $customer->id . '/edit') }}" class="text-green-600 hover:text-green-700">
                                    Edit
                                </a>
                            </div>
                            <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">{{ $customer->email }}</p>
                            <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">{{ $customer->mobile_phone }}</p>
                            <ul class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                                <li class="flex items-center py-3">
                                    <span>Status</span>
                                    <span class="ml-auto"><span
                                            class="px-3 py-1 font-semibold text-green-900 leading-tight bg-green-200 opacity-50 rounded-full text-sm">{{ $customer->status }}</span></span>
                                </li>
                                <li class="flex items-center py-3">
                                    <span>Customer since</span>
                                    <span class="ml-auto">{{ $customer->created_at }}</span>
                                </li>
                                <li class="flex items-center py-3">
                                    <span>Active policies</span>
                                    <span class="ml-auto">3</span>
                                </li>
                                <li class="flex items-center py-3">
                                    <span>Primary Company</span>
                                    <span class="ml-auto">Erie</span>
                                </li>
                            </ul>
                        </div>
                        <!-- End of profile card -->
                        <div class="my-4"></div>
                        <!-- Friends card -->
                        <div class="bg-white p-3 hover:shadow rounded-md">
                            <div class="flex items-center space-x-3 text-gray-700 font-heading font-semibold text-lg leading-8 my-1">
                                <span class="text-green-500">
                                    <svg class="h-5 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </span>
                                <span>Household</span>
                            </div>
                            <div class="grid grid-cols-3">
                                <div class="text-center my-2">
                                    <img class="h-16 w-16 rounded-full mx-auto"
                                        src="https://cdn.australianageingagenda.com.au/wp-content/uploads/2015/06/28085920/Phil-Beckett-2-e1435107243361.jpg"
                                        alt="">
                                    <a href="#" class="text-main-color">Kojstantin</a>
                                </div>
                                <div class="text-center my-2">
                                    <img class="h-16 w-16 rounded-full mx-auto"
                                        src="https://widgetwhats.com/app/uploads/2019/11/free-profile-photo-whatsapp-4.png"
                                        alt="">
                                    <a href="#" class="text-main-color">James</a>
                                </div>
                                <div class="text-center my-2">
                                    <img class="h-16 w-16 rounded-full mx-auto"
                                        src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"
                                        alt="">
                                    <a href="#" class="text-main-color">Natie</a>
                                </div>
                            </div>
                        </div>
                        <!-- End of friends card -->
                    </div>
                    <!-- Middle Section -->
                    <div class="w-full md:w-9/12 mx-2">
                        <!-- Profile tab -->
                        <!-- General Information Section -->
                        <div class="bg-white p-3 rounded-md">
                            <div class="flex items-center space-x-2 text-gray-700 font-heading font-semibold text-lg leading-8 my-1">
                                <span clas="text-green-500">
                                    
                                </span>
                                <span class="tracking-wide">General Information</span>
                            </div>
                            <div class="text-gray-700 font-sans">
                                <div class="grid grid-cols-4 gap-1 text-sm">
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">First Name</div>
                                        <div class="px-4">{{ $customer->first_name }}</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Last Name</div>
                                        <div class="px-4">{{ $customer->last_name }}</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Email</div>
                                        <div class="px-4">
                                            <a class="text-blue-800" href="#">{{ $customer->email }}</a>
                                        </div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Phone No.</div>
                                        <div class="px-4">{{ $customer->mobile_phone }}</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Address Line 1</div>
                                        <div class="px-4">{{ $customer->address_line_one }}</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Address Line 2</div>
                                        <div class="px-4">{{ $customer->address_line_two }}</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">City</div>
                                        <div class="px-4">{{ $customer->city }}</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">State</div>
                                        <div class="px-4">{{ $customer->state }}</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Zip</div>
                                        <div class="px-4">{{ $customer->zip }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <!-- End of general info section -->

                        <div class="my-4"></div>

                        <!-- Agency Information Section -->
                        <div class="bg-white p-3 rounded-md">
                            <div class="flex items-center space-x-2 text-gray-700 font-heading font-semibold text-lg leading-8 my-1">
                                <span clas="text-green-500">
                                    svg
                                </span>
                                <span class="tracking-wide">Agency Information</span>
                            </div>
                            <div class="text-gray-700 font-sans">
                                <div class="grid grid-cols-4 gap-1 text-sm">
                                    <div class="">
                                        <div class="px-4 py-1 font-semibold">Producer</div>
                                        <div class="px-4">Jesse Nieman</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">CSR</div>
                                        <div class="px-4">Jesse Nieman</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Status</div>
                                        <div class="px-4">Active</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Line</div>
                                        <div class="px-4">Personal</div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <!-- End of agency info section -->

                        <div class="my-4"></div>

                        <!-- Demographics Section -->
                        <div class="bg-white p-3 rounded-md">
                            <div class="flex items-center space-x-2 text-gray-700 font-heading font-semibold text-lg leading-8 my-1">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">Demographics</span>
                            </div>
                            <div class="text-gray-700 font-sans">
                                <div class="grid grid-cols-4 gap-1 text-sm">
                                    <div class="">
                                        <div class="px-4 py-1 font-semibold">Marital Status</div>
                                        <div class="px-4">Married</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Anniversary</div>
                                        <div class="px-4">Feb 06, 1998</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">SSN</div>
                                        <div class="px-4">123-45-6789</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Gender</div>
                                        <div class="px-4">Female</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Employer</div>
                                        <div class="px-4">Southeastern Appliance</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Occupation</div>
                                        <div class="px-4">Sales</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Hire Date</div>
                                        <div class="px-4">Feb 10, 2010</div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <!-- End of demographics section -->

                        <div class="my-4"></div>

                        <!-- Driver Information Section -->
                        <div class="bg-white p-3 rounded-md">
                            <div class="flex items-center space-x-2 text-gray-700 font-heading font-semibold text-lg leading-8 my-1">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">Driver Information</span>
                            </div>
                            <div class="text-gray-700 font-sans">
                                <div class="grid grid-cols-4 gap-1 text-sm">
                                    <div class="">
                                        <div class="px-4 py-1 font-semibold">License Number</div>
                                        <div class="px-4">5550-5266-52662-0</div>
                                    </div>
                                    <div class="">
                                        <div class="px-4 py-1 font-semibold">License State</div>
                                        <div class="px-4">MD</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Issued Date</div>
                                        <div class="px-4">Feb 06, 1998</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Expiration Date</div>
                                        <div class="px-4">Feb 06, 1998</div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <!-- End of driver info section -->
                    </div>

                    <!-- Right Side -->
                    <div class="w-full md:w-3/12 md:mx-2">
                        <!-- Communication and Notes  -->
                        <div class="bg-white p-3 rounded-md">
                            <div class="flex items-center justify-between">
                                <h1 class="text-gray-700 font-heading font-semibold text-lg leading-8 my-1 tracking-wide">Communication & Notes</h1>
                            </div>
                            <textarea class="border border-gray-300 rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" 
                                      name="notes" id="" cols="30" rows="5">Spoke about...</textarea>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>