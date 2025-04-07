<x-auth-session-status class="mb-4" :status="session('status')" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<form method="POST" action="{{ route('login') }}" class="justify-self-center flex my-40">
    

    <div class="h-140 w-130 bg-linear-to-t/shorter from-red-500 to-rose-950 shadow-2xl shadow-red-400">

        <div class="ring-3 ring-amber-300 shadow-xl shadow-amber-300/60 rounded-full mx-center mt-10 w-30 h-30 justify-self-center"></div>

        <h2 class="justify-self-center text-4xl font-extrabold text-slate-50 mt-4" style="font-family: Nunito">FastRent</h2>

        <input type="email" name="email" :value="old('email')" placeholder="E-mail" style="font-family: Nunito" class="justify-self-center flex rounded-xl w-80 h-12 pl-2 mt-8 text-slate-50 bg-indigo-950" required autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt2" />

        <input type="password" name="password" placeholder="Senha" style="font-family:Nunito" class="justify-self-center flex rounded-xl w-80 h-12 pl-2 mt-8 text-slate-50 bg-indigo-950" required autocomplete="current-password" />
        <x-input-error :messages="$errors->get('password')" class="mt2" />

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-800 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-off-white">{{ __('Remember me') }}</span>
            </label>
        </div>


        <button class="justify-self-center justify-center flex bg-linear-to-t/shorter from-rose-950 to-red-500 w-40 h-10 rounded-xl mt-10 pt-2 cursor-pointer text-slate-50 shadow-xl shadow-red-900" style="font-family: Nunito" {{ __('Log in') }}>Entrar</button>

        <a href="{{url('/register')}}" class="justify-self-center flex underline text-cyan-500 text-slate-50 mt-4" style="font-family: Nunito">Não possui uma conta?Cadastre-se</a>
    </div>
</form>
