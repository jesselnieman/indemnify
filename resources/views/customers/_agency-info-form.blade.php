<div class="pt-2">
    <label for="producer" class="text-sm text-gray-500">{{ __('Producer') }}</label>
    <span class="text-red-500 required-dot">
        *
    </span>
    <input id="producer" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('producer') is-invalid @enderror" 
            name="producer" value="{{ old('producer') }}" required autocomplete="producer" autofocus>

    @error('producer')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="csr" class="text-sm text-gray-500">{{ __('CSR') }}</label>
    <span class="text-red-500 required-dot">
        *
    </span>
    <input id="csr" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('csr') is-invalid @enderror" 
            name="csr" value="{{ old('csr') }}" required autocomplete="csr" autofocus>

    @error('csr')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="line" class="text-sm text-gray-500">{{ __('Line') }}</label>
    <input id="line" type="text" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('line') is-invalid @enderror" 
            name="line" value="{{ old('line') }}" autocomplete="line" autofocus>

    @error('line')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>