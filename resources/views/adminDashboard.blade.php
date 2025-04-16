<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Great+Vibes&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet" />

  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <title>Document</title>

</head>

<body class="bg-linear-to-br from-rose-950 to-red-500 bg-no-repeat bg-cover bg-fixed">
  <nav class="bg-gray-900">

    <div style="font-family: Great Vibes" class="flex text-slate-50">
      <h1 class="my-7 pl-3 text-6xl">FastRent</h1>

      <div class="justify-items-end w-full py-7">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="w-full h-full" title="Sair">
            <div name="user_icon" class="size-15 border border-slate-50 rounded-full mr-4 cursor-pointer hover:bg-red-600 transition duration-300"></div>
          </button>
        </form>
      </div>
    </div>

  </nav>

  <div class="flex">

    <div class="offcanvas offcanvas-start w-50 h-200 bg-gray-900" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
      <div class="offcanvas-header">
      </div>
      <div style="font-family: Nunito" class="w-40">
        <div class="text-slate-50 gap-8">
          <ul class="pl-6 pt-6 text-2xl">
            <li class="cursor-pointer hover:bg-linear-to-r from-red-500 to-gray-900">Carros</li>
            <li class="mt-6 cursor-pointer hover:bg-linear-to-r from-gray-900 to-red-500">Marcas</li>
            <li class="mt-6 cursor-pointer hover:bg-linear-to-r from-gray-900 to-red-500">Usuários</li>
            <li class="mt-6 cursor-pointer hover:bg-linear-to-r from-gray-900 to-red-500">Ajuda</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="flex gap-4 justify-self-center mt-16 ml-60 ">
      <div style="font-family: Nunito" class="card w-130 h-60 shadow-xl shadow-red-500 bg-gray-900 text-slate-50 rounded-xl border-2 border-red-200">
        <div class="card-body">
          <h5 class="card-title text-4xl mt-6 ml-6">Veículos Cadastrados</h6>
            <p class="card-text text-sm text-gray-100 mt-6 ml-6">Carros cadastrados para ser alugado ou comprado</p>
            <a href="{{ route('cars.index') }}" class="btn h-8 bg-gray-800 border-green-400 border-2 text-slate-50 px-4 ml-6 mt-6 cursor-pointer rounded-xl">
              Ver Carros
            </a>
        </div>
      </div>

      <div style="font-family: Nunito" class="card w-130 h-60 shadow-xl shadow-red-500 bg-gray-900 text-slate-50 rounded-xl border-2 border-red-200 ml-30">
        <div class="card-body">
          <h5 class="card-title text-4xl mt-6 ml-6">Lista de Marcas</h6>
            <p class="card-text text-sm text-gray-100 mt-6 ml-6">Lista de marcas as quais possuimos veículos</p>
            <a href="{{ route('cars.index') }}" class="btn h-8 bg-gray-800 border-green-400 border-2 text-slate-50 px-4 ml-6 mt-6 cursor-pointer rounded-xl">
              Ver Carros
            </a>
        </div>
      </div>
    </div>
</body>

</html>