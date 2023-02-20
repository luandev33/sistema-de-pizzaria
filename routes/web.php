<?php
use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

Route::prefix('pedidos')->group(function(){
    Route::get('/', [PizzaController::class, 'index'])->name('pedidos-index');
    Route::get('/create', [PizzaController::class, 'create'])->name('pedidos-create');
    Route::post('/', [PizzaController::class, 'store'])->name('pedidos-store');
    Route::get('/{id}/edit', [PizzaController::class, 'edit'])->where('id', '[0-9]+')->name('pedidos-edit');
    Route::put('/{id}', [PizzaController::class, 'update'])->where('id', '[0-9]+')->name('pedidos-update');
    Route::delete('/{id}/{page}', [PizzaController::class, 'destroy'])->where('id', '[0-9]+')->name('pedidos-destroy');
    Route::post('/excluir-todos', [PizzaController::class, 'deleteAll'])->name('excluir-todos');
    Route::get('/pizzaiolos', [PizzaController::class, 'pizzaiolos'])->name('pedidos-pizzaiolos');
    Route::get('/relatorio', [PizzaController::class, 'relatorio'])->name('pedidos-relatorio');
});


Route::fallback(function(){
    return "Esta Pagina não Existe";
});

