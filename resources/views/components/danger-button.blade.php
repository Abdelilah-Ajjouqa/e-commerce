<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gradient-to-r from-red-500 to-pink-500 border border-transparent rounded-lg font-semibold text-sm text-red-500 uppercase tracking-wider hover:from-red-600 hover:to-pink-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transform hover:scale-105 transition-all duration-200 shadow-md hover:shadow-lg']) }}>
    {{ $slot }}
</button>
