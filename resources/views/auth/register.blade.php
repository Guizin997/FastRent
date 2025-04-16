<x-auth-session-status class="mb-4" :status="session('status')" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<body class="bg-linear-to-br from-rose-950 to-red-500 bg-no-repeat bg-cover bg-fixed">
    
<form method="POST" action="{{ route('login') }}" class="justify-self-center flex my-40">
    @csrf    


    <div class="h-140 w-130 bg-linear-to-t/shorter from-red-500 to-rose-950 shadow-2xl shadow-red-400">

        <div style="background-image: ../img/logo.png" class="ring-3 ring-amber-300 shadow-xl shadow-amber-300/60 rounded-full mx-center mt-10 w-30 h-30 justify-self-center bg-no-repeat bg-cover bg-fixed"></div>

        <h2 class="justify-self-center text-4xl font-extrabold text-slate-50 mt-4" style="font-family: Nunito">Login</h2>

        <input type="text" id="name" name="name" placeholder="Nome *" style="font-family: Nunito" class="justify-self-center flex rounded-xl w-80 h-12 pl-2 mt-8 text-slate-50 bg-indigo-950" required autofocus autocomplete="name">
        <x-input-error :messages="$errors->get('name')" class="mt-2 ml-26 w-80" />

        <input type="email" id="email" name="email" placeholder="E-mail *" style="font-family:Nunito" class="justify-self-center flex rounded-xl w-80 h-12 pl-2 mt-8 text-slate-50 bg-indigo-950" required autocomplete="username">
        <x-input-error :messages="$errors->get('email')" class="mt-2 ml-26 w-80" />

        <input type="password" id="passwored" name="password" placeholder="Senha *" style="font-family: Nunito" class="justify-self-center flex rounded-xl w-80 h-12 pl-2 mt-8 text-slate-50 bg-indigo-950" required autocomplete="new-password">
        <x-input-error :messages="$errors->get('password')" class="mt-2 ml-26 w-80" />

        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Digite a senha novamente *" style="font-family:Nunito" class="justify-self-center flex rounded-xl w-80 h-12 pl-2 mt-8 text-slate-50 bg-indigo-950" required autocomplete="new-password">
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 ml-26 w-80" />

        <x-primary-button class="ms-3">
                {{ __('Entrar') }}
        </x-primary-button>
        <a href="{{url('/register')}}" class="justify-self-center flex underline text-cyan-500 text-slate-50 mt-4" style="font-family: Nunito">Não possui uma conta?Cadastre-se</a>
    </div>
</form>

</body>
