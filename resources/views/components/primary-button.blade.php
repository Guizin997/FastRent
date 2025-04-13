<button {{ $attributes->merge(['type' => 'submit', 'class' => "justify-self-center justify-center flex bg-linear-to-t/shorter from-rose-950 to-red-500 w-40 h-10 rounded-xl mt-10 pt-2 cursor-pointer text-slate-50 shadow-xl shadow-red-900" ]) }}>
    {{ $slot }}
</button>
