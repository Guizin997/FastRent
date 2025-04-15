<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>

</head>
<body class="bg-linear-to-br from-rose-950 to-red-500 bg-no-repeat bg-cover bg-fixed">
    <nav class="h-30 bg-linear-to-b from-stone-950 to-rose-900/0 bg-cover">
         
        <div class="flex">
        <div style="font-family: Nunito" class="text-slate-50 flex gap-8 pl-8">
            <a class="my-12" href="">Carros</a>
            <a class="my-12" href="">Marcas</a>
            <a class="my-12" href="">Usuários</a>
            <a class="my-12" href="">Ajuda</a>
        </div>

        <div class="justify-items-end w-full py-7">
          <div class="size-15 border border-slate-50 rounded-full mr-4"></div>
        </div>
        </div>

    </nav>

    <!--
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Enable body scrolling</button>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Offcanvas with body scrolling</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <p>Try scrolling the rest of the page to see this option in action.</p>
    </div>
    </div>
    -->

    <div class="flex gap-4 justify-self-center mt-16">
    <div style="font-family: Nunito" class="card w-90 h-50 shadow-xl shadow-red-500 bg-gray-900 text-slate-50 rounded-xl border-2 border-red-200">
        <div class="card-body">
            <h5 class="card-title text-4xl mt-6 ml-6">Adicionar veículo</h6>
            <p class="card-text text-sm text-gray-100 mt-8 ml-6">Adicionar carrocpara ser alugado ou comprado</p>
            <button style="font-family: Nunito" class="h-8 bg-gray-800 border-green-400 border-2 text-slate-50 px-4 ml-6 mt-4 cursor-pointer rounded-xl">Adicionar</button>
        </div>
    </div>

    <div style="font-family: Nunito" class="card w-90 h-50 shadow-xl shadow-red-500 bg-gray-900 text-slate-50 rounded-xl border-2 border-red-200">
        <div class="card-body">
            <h5 class="card-title text-4xl mt-6 ml-6">Adicionar marca</h6>
            <p class="card-text text-sm text-gray-100 mt-8 ml-6">Adicionar nova marca parceira com nossa empresa</p>
            <button style="font-family: Nunito" class="h-8 bg-gray-800 border-green-400 border-2 text-slate-50 px-4 ml-6 mt-4 cursor-pointer rounded-xl">Adicionar</button>
        </div>
    </div>
    </div>
</body>
</html>
