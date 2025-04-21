<x-auth-session-status class="mb-4" :status="session('status')" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<body class="bg-gray-900">
    
<form method="POST" action="{{ route('register') }}" class="justify-self-center flex my-33">
    @csrf    


    <div class="h-169 w-130 bg-linear-to-t/shorter from-red-500 to-rose-950 rounded-2xl shadow-xl shadow-red-700/60">

        <div class="ring-3 ring-amber-300 shadow-xl shadow-amber-300/60 rounded-full mx-center mt-10 w-30 h-30 justify-self-center bg-no-repeat bg-cover bg-fixed"><img class="rounded-full" src="{{ asset('assets/images/fastRentLogo.png') }}" alt="FastRent Logo"></div>

        <h2 class="justify-self-center text-4xl font-extrabold text-slate-50 mt-4" style="font-family: Nunito">Alugar Carro</h2>

        <input type="text" id="email" name="name" placeholder="Informe seu email *" style="font-family: Nunito" class="justify-self-center flex rounded-xl w-80 h-12 pl-2 mt-8 text-slate-50 bg-indigo-950" required autofocus autocomplete="name">
        <x-input-error :messages="$errors->get('name')" class="mt-2 ml-26 w-80" />

        <input type="email" id="email" name="number" placeholder="Informe seu CPF *" style="font-family:Nunito" class="justify-self-center flex rounded-xl w-80 h-12 pl-2 mt-8 text-slate-50 bg-indigo-950" required autocomplete="username">
        <x-input-error :messages="$errors->get('email')" class="mt-2 ml-26 w-80" />

        <input type="date" id="password" name="password" placeholder="Informe a data de devolução *" style="font-family: Nunito" class="justify-self-center flex rounded-xl w-80 h-12 pl-2 mt-8 text-slate-50 bg-indigo-950" required autocomplete="new-password">
        <x-input-error :messages="$errors->get('password')" class="mt-2 ml-26 w-80" />


        <x-primary-button class="ms-3">
                {{ __('Cadastrar') }}
        </x-primary-button>
    </div>
</form>

</body>
