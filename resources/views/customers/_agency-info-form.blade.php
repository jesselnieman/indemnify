<div class="pt-2">
    <label for="producer" class="text-sm text-gray-500">{{ __('Producer') }}</label>
    <span class="text-red-500 required-dot">
        *
    </span>
    <select id="producer" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('producer') is-invalid @enderror" 
            name="producer" value="{{ old('producer') }}" required autocomplete="producer" autofocus>
        <option value=""></option>
        <option value="">Jesse</option>
        <option value="">Kelcie</option>
        <option value="">Ron</option>
    </select>

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
    <select id="csr" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('csr') is-invalid @enderror" 
            name="csr" value="{{ old('csr') }}" required autocomplete="csr" autofocus>
        <option value=""></option>
        <option value="">Jesse</option>
        <option value="">Kelcie</option>
        <option value="">Wendy</option>
    </select>

    @error('csr')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="pt-2">
    <label for="line" class="text-sm text-gray-500">{{ __('Line') }}</label>
    <select id="line" 
            class="mt-1 block w-full rounded border-gray-300 focus:border-blue-100 @error('line') is-invalid @enderror" 
            name="line" value="{{ old('line') }}" required autocomplete="line" autofocus>
        <option value=""></option>
        <option value="">Auto</option>
        <option value="">Home</option>
        <option value="">Commercial</option>
        <option value="">Multiple</option>
    </select>

    @error('line')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>