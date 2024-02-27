<div class="row mb-2">
    <div class="col-12">
        <label for="{{ $id }}" class="m-0">{{ $label }}</label>
        <input type="{{ $type }}"
               id="{{ $id }}"
               {{ $attributes->merge(['class' => 'form-control']) }}
               {{ $attributes->whereStartsWith('required') }}
               wire:model="{{ $model }}"
               name="{{ $model }}"
               value="{{ old($model, '') }}"
        >
        @error($model) <span class="error">{{ $message }}</span> @enderror
    </div>
</div>
