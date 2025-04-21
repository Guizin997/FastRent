<x-auth-session-status class="mb-4" :status="session('status')" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<body class="bg-gray-900">
    
<form method="POST" action="{{ route('login') }}" class="justify-self-center flex my-40">
    @csrf    


    <div class="h-140 w-130 bg-linear-to-t/shorter from-red-500 to-rose-950 rounded-2xl shadow-xl shadow-red-700/60">

        <h2 class="justify-self-center text-4xl font-extrabold text-slate-50 mt-4" style="font-family: Nunito">Editar carro alugado</h2>

        <input type="date" name="email" :value="old('email')" placeholder="Reinforme a data de devolução *" style="font-family: Nunito" class="justify-self-center flex rounded-xl w-80 h-12 pl-2 mt-8 text-slate-50 bg-indigo-950" required autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt2" />

        <x-primary-button class="ms-3">
                {{ __('Entrar') }}
        </x-primary-button>
    </div>
</form>

</body>
