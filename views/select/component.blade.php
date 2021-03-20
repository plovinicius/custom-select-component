<div class="{{ $containerClass }}">
    @include('select.partials.hidden-field')

    <div x-data="dropdown()" x-init="loadOptions({{ $ref }})">
        <div>
            @isset($label)
            <label for="{{ $id }}" class="block text-sm font-medium text-gray-700">
                {{ $label }}
            </label>
            @endisset

            <div class="relative">
                <div x-on:click="open">
                    <div class="flex p-1 my-2 bg-white border border-gray-300 rounded {{ $errors->has($validationName) ? 'border-red-500' : '' }}">
                        @include('select.partials.field')

                        @include('select.partials.toggle-btn')
                    </div>
                </div>

                @include('select.partials.content')
            </div>
        </div>
    </div>

    @error($validationName)
    <div class="px-4 py-1 mt-2 text-sm text-red-800 bg-red-100 rounded-sm">
        {{ $message }}
    </div>
    @enderror
</div>
