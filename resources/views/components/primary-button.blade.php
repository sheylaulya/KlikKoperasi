<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn', 'style' => 'background: #696CFF; margin-bottom: 50px; color: white;']) }}>
    {{ $slot }}
</button>
