<div class="row mb-2">
    <div class="col-12">
        <label for="{{ $id }}" class="m-0">{{ $label }}</label>
        <select id="{{ $id }}"
                {{ $attributes->whereStartsWith('required') }}
                wire:model.live="{{ $model }}"
                name="{{ $model }}"
                class="{{ $class }}"
        >
            <option value="">Select {{ $label }}</option>
            @foreach($options as $index => $option)
                <option value="{{ $index }}">{{ $option }}</option>
            @endforeach
        </select>
        @error($model) <span class="error">{{ $message }}</span> @enderror
    </div>
</div>
