<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-scarlet-red border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-dark-red active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-scarlet-red focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
