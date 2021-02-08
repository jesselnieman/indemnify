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
                            <div class="flex pl-3 items-center space-x-2 text-gray-700 font-heading font-semibold text-lg leading-8 my-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12ZM12 14C9.33 14 4 15.34 4 18V20H20V18C20 15.34 14.67 14 12 14Z" fill="#323232"/>
                                </svg>
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
                            <div class="flex pl-3 items-center space-x-2 text-gray-700 font-heading font-semibold text-lg leading-8 my-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.9 8.89L20.85 4.52C20.63 3.62 19.85 3 18.94 3H5.05001C4.15001 3 3.36001 3.63 3.15001 4.52L2.10001 8.89C1.86001 9.91 2.08001 10.95 2.72001 11.77C2.80001 11.88 2.91001 11.96 3.00001 12.06V19C3.00001 20.1 3.90001 21 5.00001 21H19C20.1 21 21 20.1 21 19V12.06C21.09 11.97 21.2 11.88 21.28 11.78C21.92 10.96 22.15 9.91 21.9 8.89ZM18.91 4.99L19.96 9.36C20.06 9.78 19.97 10.2 19.71 10.53C19.57 10.71 19.27 11 18.77 11C18.16 11 17.63 10.51 17.56 9.86L16.98 5L18.91 4.99ZM13 5H14.96L15.5 9.52C15.55 9.91 15.43 10.3 15.17 10.59C14.95 10.85 14.63 11 14.22 11C13.55 11 13 10.41 13 9.69V5ZM8.49001 9.52L9.04001 5H11V9.69C11 10.41 10.45 11 9.71001 11C9.37001 11 9.06001 10.85 8.82001 10.59C8.57001 10.3 8.45001 9.91 8.49001 9.52ZM4.04001 9.36L5.05001 5H7.02001L6.44001 9.86C6.36001 10.51 5.84001 11 5.23001 11C4.74001 11 4.43001 10.71 4.30001 10.53C4.03001 10.21 3.94001 9.78 4.04001 9.36ZM5.00001 19V12.97C5.08001 12.98 5.15001 13 5.23001 13C6.10001 13 6.89001 12.64 7.47001 12.05C8.07001 12.65 8.87001 13 9.78001 13C10.65 13 11.43 12.64 12.01 12.07C12.6 12.64 13.4 13 14.3 13C15.14 13 15.94 12.65 16.54 12.05C17.12 12.64 17.91 13 18.78 13C18.86 13 18.93 12.98 19.01 12.97V19H5.00001Z" fill="#323232"/>
                                </svg>
                                <span class="tracking-wide">Agency Information</span>
                            </div>
                            <div class="text-gray-700 font-sans">
                                <div class="grid grid-cols-4 gap-1 text-sm">
                                    <div class="">
                                        <div class="px-4 py-1 font-semibold">Producer</div>
                                        <div class="px-4">{{ $customer->producer }}</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">CSR</div>
                                        <div class="px-4">{{ $customer->csr }}</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Status</div>
                                        <div class="px-4">{{ $customer->status }}</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Line</div>
                                        <div class="px-4">{{ $customer->line }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <!-- End of agency info section -->

                        <div class="my-4"></div>

                        <!-- Demographics Section -->
                        <div class="bg-white p-3 rounded-md">
                            <div class="flex pl-3 items-center space-x-2 text-gray-700 font-heading font-semibold text-lg leading-8 my-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 10H5V7H3V10H0V12H3V15H5V12H8V10ZM18 11C19.66 11 20.99 9.66 20.99 8C20.99 6.34 19.66 5 18 5C17.68 5 17.37 5.05 17.09 5.14C17.66 5.95 17.99 6.93 17.99 8C17.99 9.07 17.65 10.04 17.09 10.86C17.37 10.95 17.68 11 18 11ZM13 11C14.66 11 15.99 9.66 15.99 8C15.99 6.34 14.66 5 13 5C11.34 5 10 6.34 10 8C10 9.66 11.34 11 13 11ZM19.62 13.16C20.45 13.89 21 14.82 21 16V18H24V16C24 14.46 21.63 13.51 19.62 13.16ZM13 13C11 13 7 14 7 16V18H19V16C19 14 15 13 13 13Z" fill="#323232"/>
                                </svg>
                                <span class="tracking-wide">Demographics</span>
                            </div>
                            <div class="text-gray-700 font-sans">
                                <div class="grid grid-cols-4 gap-1 text-sm">
                                    <div class="">
                                        <div class="px-4 py-1 font-semibold">Marital Status</div>
                                        <div class="px-4">{{ $customer->marital_status }}</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Anniversary</div>
                                        <div class="px-4">{{ $customer->anniversary_date }}</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">SSN</div>
                                        <div class="px-4">{{ $customer->ssn }}</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Gender</div>
                                        <div class="px-4">{{ $customer->gender }}</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Employer</div>
                                        <div class="px-4">{{ $customer->employer }}</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Occupation</div>
                                        <div class="px-4">{{ $customer->occupation }}</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Hire Date</div>
                                        <div class="px-4">{{ $customer->hire_date }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <!-- End of demographics section -->

                        <div class="my-4"></div>

                        <!-- Driver Information Section -->
                        <div class="bg-white p-3 rounded-md">
                            <div class="flex pl-3 items-center space-x-2 text-gray-700 font-heading font-semibold text-lg leading-8 my-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.92 5.01C18.72 4.42 18.16 4 17.5 4H6.5C5.84 4 5.29 4.42 5.08 5.01L3 11V19C3 19.55 3.45 20 4 20H5C5.55 20 6 19.55 6 19V18H18V19C18 19.55 18.45 20 19 20H20C20.55 20 21 19.55 21 19V11L18.92 5.01ZM6.5 15C5.67 15 5 14.33 5 13.5C5 12.67 5.67 12 6.5 12C7.33 12 8 12.67 8 13.5C8 14.33 7.33 15 6.5 15ZM17.5 15C16.67 15 16 14.33 16 13.5C16 12.67 16.67 12 17.5 12C18.33 12 19 12.67 19 13.5C19 14.33 18.33 15 17.5 15ZM5 10L6.5 5.5H17.5L19 10H5Z" fill="#323232"/>
                                </svg>
                                <span class="tracking-wide">Driver Information</span>
                            </div>
                            <div class="text-gray-700 font-sans">
                                <div class="grid grid-cols-4 gap-1 text-sm">
                                    <div class="">
                                        <div class="px-4 py-1 font-semibold">License Number</div>
                                        <div class="px-4">{{ $customer->license_number }}</div>
                                    </div>
                                    <div class="">
                                        <div class="px-4 py-1 font-semibold">License State</div>
                                        <div class="px-4">{{ $customer->license_state }}</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Issued Date</div>
                                        <div class="px-4">{{ $customer->license_issue_date }}</div>
                                    </div>
                                    <div class="pb-2">
                                        <div class="px-4 py-1 font-semibold">Expiration Date</div>
                                        <div class="px-4">{{ $customer->license_expiration_date }}</div>
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