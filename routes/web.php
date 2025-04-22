<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/admin/dashboard', function () {
    return view('adminDashboard');
})->middleware(['auth', 'verified', AdminMiddleware::class])->name('admin.dashboard');

Route::get('/user/dashboard', function () {
    return view('userDashboard');
})->middleware(['auth', 'verified', UserMiddleware::class])->name('user.dashboard');

Route::get('/dashboard', function () {
    $user = Auth::user();

    if ($user->is_admin) {
        return redirect()->route('admin.dashboard');
    }

    return redirect()->route('user.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/cars', [CarController::class,  'index'])->name('cars.index');
Route::get('/cars/create', [CarController::class,  'create'])->name('cars.create');
Route::post('/cars', [CarController::class,  'store'])->name('cars.store');
Route::get('/cars/{car}', [CarController::class,  'show'])->name('cars.show');
Route::get('/cars/{car}/edit', [CarController::class,  'edit'])->name('cars.edit');
Route::put('/cars/{car}', [CarController::class,  'update'])->name('cars.update');
Route::delete('/cars/{car}', [CarController::class,  'destroy'])->name('cars.destroy');

require __DIR__.'/auth.php';











// https://kopi.dev/best-tailwind-css-admin-template/

// palheta de cores: azul marinho, preto, branco e vermelho


/* 
    Vermelho Escuro (#B71C1C)
    Vermelho escarlate (#D32F2F)
    Branco puro (#FFFFFF)
    Branco Off-White (#F0F0F0)
    Preto Puro (#000000)
    Azul marinho escuro (#001F33)
*/


/* 
    1. Azul Marinho – Elegância e Confiabilidade
    O azul marinho transmite confiança e profissionalismo, o que é crucial no setor automobilístico, onde os consumidores buscam marcas em que possam confiar para tomar decisões de compra importantes. Além disso, o azul é uma cor associada ao luxo e à alta performance em muitos contextos.

    2. Preto – Sofisticação e Poder
    O preto é frequentemente utilizado para representar luxo, potência e exclusividade. No setor de carros, o preto é uma cor que remete a veículos de alto desempenho e design sofisticado, como carros de luxo e esportivos. Ele também ajuda a criar um visual mais "premium" para o seu site, dando-lhe uma aparência moderna e refinada.

    3. Branco – Clareza e Modernidade
    O branco serve para iluminar a paleta e oferecer contraste com o azul marinho e o preto, criando espaços limpos e organizados no design. Ele também ajuda a evitar que a página fique visualmente muito pesada, proporcionando uma experiência de navegação mais agradável e fácil. O branco transmite modernidade e frescor, o que pode atrair consumidores mais jovens ou aqueles que buscam carros inovadores e com design de ponta.

    4. Vermelho – Energia e Ação
    O vermelho é uma cor vibrante e energética que chama a atenção instantaneamente. No contexto de carros, ela pode ser usada para destacar elementos importantes, como botões de ação (por exemplo, “Comprar Agora” ou “Ver Detalhes”) ou promoções especiais. O vermelho também é uma cor associada à performance e esportividade, por isso pode funcionar muito bem em sites de carros esportivos ou de alto desempenho.

    Sugestões para o Design do Site:
    Fundo: Você pode optar por um fundo escuro (azul marinho ou preto) para criar uma sensação de sofisticação e focar nos carros ou produtos em destaque. Um fundo escuro também permite que as imagens de carros (geralmente de cores brilhantes) se destaquem de maneira impressionante.

    Tipografia: Para a tipografia, utilize um branco ou cinza claro para garantir legibilidade sobre fundos escuros. Além disso, uma fonte robusta e moderna, talvez com um toque esportivo, pode reforçar a imagem de alta performance.

    Elementos Interativos: O vermelho pode ser usado para botões de chamada para ação (CTAs), como "Solicitar Test Drive" ou "Comprar Agora", criando um ponto de destaque que conduz os usuários à ação.

    Imagens: Ao usar fotos de carros, especialmente modelos mais luxuosos ou esportivos, as cores escuras da paleta vão dar ênfase ao brilho e aos detalhes das imagens, mantendo o visual moderno e profissional.

    Conclusão:
    Essa paleta de cores é uma excelente escolha para um site de carros, pois comunica uma sensação de elegância, potência e confiança, ao mesmo tempo em que cria contrastes dinâmicos para guiar o usuário e destacar elementos importantes. A chave está em equilibrar bem o uso dessas cores para não sobrecarregar o design e garantir uma navegação fluida e atraente. 
*/