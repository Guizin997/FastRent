<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<form method="POST" action="{{ route('register') }}" class="justify-self-center flex my-20">
    @csrf

    <div class="h-170 w-130 bg-linear-to-t/shorter from-red-500 to-rose-950 shadow-2xl shadow-red-400">

        <div class="ring-3 ring-amber-300 shadow-xl shadow-amber-300/60 rounded-full mx-center mt-10 w-30 h-30 justify-self-center"></div>

        <h2 class="justify-self-center text-4xl font-extrabold text-slate-50 mt-4" style="font-family: Nunito">FastRent</h2>

        <input type="text" placeholder="Nome" style="font-family: Nunito" class="justify-self-center flex rounded-xl w-80 h-12 pl-2 mt-8 text-slate-50 bg-indigo-950" required autofocus autocomplete="name">

        <input type="email" placeholder="E-mail" style="font-family:Nunito" class="justify-self-center flex rounded-xl w-80 h-12 pl-2 mt-8 text-slate-50 bg-indigo-950" required autocomplete="username">

        <input type="password" placeholder="Senha" style="font-family: Nunito" class="justify-self-center flex rounded-xl w-80 h-12 pl-2 mt-8 text-slate-50 bg-indigo-950" required autocomplete="new-password">

        <input type="password" name="password" id="password" placeholder="Digite a senha novamente" style="font-family:Nunito" class="justify-self-center flex rounded-xl w-80 h-12 pl-2 mt-8 text-slate-50 bg-indigo-950">

        <button class="justify-self-center justify-center flex bg-linear-to-t/shorter from-rose-950 to-red-500 w-40 h-10 rounded-xl mt-10 pt-2 cursor-pointer text-slate-50 shadow-xl shadow-red-900" style="font-family: Nunito" href="#">Entrar</button>

        <a href="{{url('/login')}}" class="justify-self-center flex underline text-cyan-500 text-slate-50 mt-6" style="font-family: Nunito">Já possui uma conta? Entrar</a>

    </div>
</form>
