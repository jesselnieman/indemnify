<div class="pt-2">
    <label for="first_name" class="text-sm text-gray-500">{{ __('First Name') }}</label>
    <input id="first_name" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('first_name') is-invalid @enderror" 
            name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

    @error('first_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="middle_name" class="text-sm text-gray-500">{{ __('Middle Name') }}</label>
    <input id="middle_name" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('middle_name') is-invalid @enderror" 
            name="middle_name" value="{{ old('middle_name') }}" autocomplete="middle_name" autofocus>

    @error('middle_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="last_name" class="text-sm text-gray-500">{{ __('Last Name') }}</label>
    <input id="last_name" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('last_name') is-invalid @enderror" 
            name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

    @error('last_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="email" class="text-sm text-gray-500">{{ __('Email') }}</label>
    <input id="email" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('email') is-invalid @enderror" 
            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="mobile_phone" class="text-sm text-gray-500">{{ __('Mobile Phone') }}</label>
    <input id="mobile_phone" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('mobile_phone') is-invalid @enderror" 
            name="mobile_phone" value="{{ old('mobile_phone') }}" autocomplete="mobile_phone" autofocus>

    @error('mobile_phone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="home_phone" class="text-sm text-gray-500">{{ __('Home Phone') }}</label>
    <input id="home_phone" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('home_phone') is-invalid @enderror" 
            name="home_phone" value="{{ old('home_phone') }}" autocomplete="home_phone" autofocus>

    @error('home_phone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="address_line_one" class="text-sm text-gray-500">{{ __('Address Line 1') }}</label>
    <input id="address_line_one" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('address_line_one') is-invalid @enderror" 
            name="address_line_one" value="{{ old('address_line_one') }}" required autocomplete="address_line_one" autofocus>

    @error('address_line_one')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="address_line_two" class="text-sm text-gray-500">{{ __('Address Line 2') }}</label>
    <input id="address_line_two" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('address_line_two') is-invalid @enderror" 
            name="address_line_two" value="{{ old('address_line_two') }}" autocomplete="address_line_two" autofocus>

    @error('address_line_two')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="city" class="text-sm text-gray-500">{{ __('City') }}</label>
    <input id="city" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('city') is-invalid @enderror" 
            name="city" value="{{ old('city') }}" autocomplete="city" autofocus>

    @error('city')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="state" class="text-sm text-gray-500">{{ __('State') }}</label>
    <input id="state" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('state') is-invalid @enderror" 
            name="state" value="{{ old('state') }}" autocomplete="state" autofocus>

    @error('state')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="zip" class="text-sm text-gray-500">{{ __('Zip Code') }}</label>
    <input id="zip" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('zip') is-invalid @enderror" 
            name="zip" value="{{ old('zip') }}" autocomplete="zip" autofocus>

    @error('zip')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>