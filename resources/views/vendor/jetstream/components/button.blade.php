<button {{ $attributes->merge(['type' => 'submit', 'class' => 
    ' text-center inline-flex px-4 py-2 bg-green-800 border border-transparent rounded-md 
    font-semibold text-xs text-white uppercase 
    tracking-widest hover:bg-green-600 active:bg-green-800 focus:outline-none 
    focus:border-green-800 focus:ring focus:ring-green-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
