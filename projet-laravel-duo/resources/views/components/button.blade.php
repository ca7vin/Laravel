<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn-dark btn text-white']) }}>
    {{ $slot }}
</button>
