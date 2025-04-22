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

    {{-- <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script> --}}
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



        <div id="bodyOfTable" class="ml-40 mt-20 text-xl">

            <form action="{{ route('cars.destroy', ['car' => $car->id]) }}" method="post" class="justify-self-center flex my-33">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <div class="h-70 w-130 bg-linear-to-t/shorter from-red-500 to-rose-950 rounded-2xl shadow-xl shadow-red-700/60">
                    <h2 class="justify-self-center text-4xl font-extrabold text-slate-50 mt-8" style="font-family: Nunito">Deletando Carro</h2>
                    <h4 class="justify-self-center text-2xl font-extrabold text-slate-50 mx-5 mt-5" style="font-family: Nunito">Deseja realmente excluir o veiculo "{{$car->car_model}}"?</h4>
                    <div class="flex flex-row justify-end px-5">
                        <button type="submit" class="button bg-gray-900 border-2 border-red-500 ml-5 mt-4 rounded-xl p-2 cursor-pointer text-slate-50">Exluir</button>
                        <a href="{{ route('cars.index') }}" class="button bg-gray-900 border-2 border-gray-400 ml-5 mt-4 rounded-xl p-2 cursor-pointer text-slate-50">Cancelar</a>
                    </div>
                </div>
            </form>

        </div>

</body>

</html>