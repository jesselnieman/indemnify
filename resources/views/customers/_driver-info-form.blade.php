<div class="pt-2">
    <label for="license_number" class="text-sm text-gray-500">{{ __('License Number') }}</label>
    <input id="license_number" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('license_number') is-invalid @enderror" 
            name="license_number" value="{{ old('license_number') }}" autocomplete="license_number" autofocus>

    @error('license_number')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="license_state" class="text-sm text-gray-500">{{ __('License State') }}</label>
    <input id="license_state" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('license_state') is-invalid @enderror" 
            name="license_state" value="{{ old('license_state') }}" autocomplete="license_state" autofocus>

    @error('license_state')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="license_issue_date" class="text-sm text-gray-500">{{ __('License Issue Date') }}</label>
    <input id="license_issue_date" type="date" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('license_issue_date') is-invalid @enderror" 
            name="license_issue_date" value="{{ old('license_issue_date') }}" autocomplete="license_issue_date" autofocus>

    @error('license_issue_date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="license_expiration_date" class="text-sm text-gray-500">{{ __('License Expiration Date') }}</label>
    <input id="license_expiration_date" type="date" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('license_expiration_date') is-invalid @enderror" 
            name="license_expiration_date" value="{{ old('license_expiration_date') }}" autocomplete="license_expiration_date" autofocus>

    @error('license_expiration_date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>