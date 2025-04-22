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

    <form method="post" action="{{ route('cars.update', ['car' => $car->id]) }}" class="justify-self-center flex my-33">
      @csrf

      <input type="hidden" name="_method" value="PUT">

      <div class="h-173 w-130 bg-linear-to-t/shorter from-red-500 to-rose-950 rounded-2xl shadow-xl shadow-red-700/60">

        <h2 class="justify-self-center text-4xl font-extrabold text-slate-50 mt-4" style="font-family: Nunito">Editar Carro</h2>

        <input value="{{ $car->car_model }}" type="text" name="car_model" placeholder="Modelo do carro *" style="font-family: Nunito" class="justify-self-center flex rounded-xl w-80 h-12 pl-2 mt-8 text-slate-50 bg-indigo-950" autofocus>

        <input value="{{ $car->car_odometer }}" type="number" name="car_odometer" placeholder="Quilometragem *" style="font-family:Nunito" class="justify-self-center flex rounded-xl w-80 h-12 pl-2 mt-8 text-slate-50 bg-indigo-950">

        <input value="{{ $car->car_fabrication_year }}" type="number" name="car_fabrication_year" placeholder="Ano de fabricação *" style="font-family: Nunito" class="justify-self-center flex rounded-xl w-80 h-12 pl-2 mt-8 text-slate-50 bg-indigo-950">

        <input value="{{ $car->car_fabricator }}" type="text" name="car_fabricator" placeholder="Marca *" style="font-family:Nunito" class="justify-self-center flex rounded-xl w-80 h-12 pl-2 mt-8 text-slate-50 bg-indigo-950">

        <input value="{{ $car->car_category }}" type="text" name="car_category" placeholder="Categoria *" style="font-family:Nunito" class="justify-self-center flex rounded-xl w-80 h-12 pl-2 mt-8 text-slate-50 bg-indigo-950">

        <input value="{{ $car->car_rental_value }}" type="text" name="car_rental_value" placeholder="Valor para aluguel *" style="font-family:Nunito" class="justify-self-center flex rounded-xl w-80 h-12 pl-2 mt-8 text-slate-50 bg-indigo-950">

        <x-primary-button class="ms-3">
          {{ __('Salvar') }}
        </x-primary-button>
      </div>
    </form>

  </div>
</body>

</html>