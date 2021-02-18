<div class="pt-2">
    <label for="marital_status" class="text-sm text-gray-500">{{ __('Marital Status') }}</label>
    <input id="marital_status" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('marital_status') is-invalid @enderror" 
            name="marital_status" value="{{ old('marital_status') }}" autocomplete="marital_status" autofocus>

    @error('marital_status')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="anniversary_date" class="text-sm text-gray-500">{{ __('Anniversary Date') }}</label>
    <input id="anniversary_date" type="date" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('anniversary_date') is-invalid @enderror" 
            name="anniversary_date" value="{{ old('anniversary_date') }}" autocomplete="anniversary_date" autofocus>

    @error('anniversary_date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="ssn" class="text-sm text-gray-500">{{ __('SSN') }}</label>
    <input id="ssn" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('ssn') is-invalid @enderror" 
            name="ssn" value="{{ old('ssn') }}" autocomplete="ssn" autofocus>

    @error('ssn')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="date_of_birth" class="text-sm text-gray-500">{{ __('Date of Birth') }}</label>
    <span class="text-red-500 required-dot">
        *
    </span>
    <input id="date_of_birth" type="date" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('date_of_birth') is-invalid @enderror" 
            name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth" autofocus>

    @error('date_of_birth')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="gender" class="text-sm text-gray-500">{{ __('Gender') }}</label>
    <input id="gender" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('gender') is-invalid @enderror" 
            name="gender" value="{{ old('gender') }}"  autocomplete="gender" autofocus>

    @error('gender')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="employer" class="text-sm text-gray-500">{{ __('Employer') }}</label>
    <input id="employer" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('employer') is-invalid @enderror" 
            name="employer" value="{{ old('employer') }}" autocomplete="employer" autofocus>

    @error('employer')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="occupation" class="text-sm text-gray-500">{{ __('Occupation') }}</label>
    <input id="occupation" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('occupation') is-invalid @enderror" 
            name="occupation" value="{{ old('occupation') }}" autocomplete="occupation" autofocus>

    @error('occupation')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="hire_date" class="text-sm text-gray-500">{{ __('Hire Date') }}</label>
    <input id="hire_date" type="date" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('hire_date') is-invalid @enderror" 
            name="hire_date" value="{{ old('hire_date') }}" autocomplete="hire_date" autofocus>

    @error('hire_date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>