<div x-data="{ inputName: @entangle($attributes->wire('model')->value()) }">
    <input type="text" class="form-control @error($attributes->wire('model')->value()) is-invalid @enderror"
        x-model="inputName" placeholder="{{ $placeholder }}" @if ($attributes->has('readonly') && $attributes->get('readonly')) readonly @endif @if ($attributes->has('disabled') && $attributes->get('disabled')) disabled @endif />
    @error($attributes->wire('model')->value())
        <div class="invalid-tooltip">{{ $errors->first($attributes->wire('model')->value()) }}</div>
    @enderror
</div>
