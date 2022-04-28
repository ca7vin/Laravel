@props(['value'])

<label {{ $attributes->merge(['class' => 'd-block text-black mb-2']) }}>
    {{ $value ?? $slot }}
</label>
