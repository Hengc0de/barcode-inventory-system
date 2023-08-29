@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-normal  font-medium text-xl text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
