<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 border border-gray-50 rounded-lg font-semibold text-sm text-black uppercase tracking-wider hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transform hover:scale-105 transition-all duration-200 shadow-md hover:shadow-lg']) }}>
    {{ $slot }}
</button>
