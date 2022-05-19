<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// сработает на http://muzei-mira/
Route::get ('/', [MainController::class, "acMain"]);

// сработает на http://muzei-mira/novosti
Route::get ('/novosti', [MainController::class, "acNovosti"]);

// сработает на http://muzei-mira/service
Route::get ('/service', [MainController::class, "acService"]);

// сработает на 
// http://muzei-mira/service/russkaya-zhivopis
// http://muzei-mira/service/ispanskaya-zhivopis и др.
Route::get ('/service/{subService}', [MainController::class, "acSubService"]);

// сработает на http://muzei-mira/skulptura
Route::get ('/blog', [MainController::class, "acBlog"]);

// сработает на http://muzei-mira/skulptura
Route::get ('/products', [MainController::class, "acProducts"]);

// сработает на http://muzei-mira/coffins
Route::get ('/coffins', [MainController::class, "acCoffins"]);

Route::get ('/venki', [MainController::class, "acVenki"]);

Route::get ('/cross', [MainController::class, "acCross"]);

Route::get ('/textile', [MainController::class, "acTextile"]);




// сработает на http://muzei-mira/skulptura
Route::get ('/newPage', [MainController::class, "acNewPage"]);

// сработает на http://muzei-mira/skulptura
Route::get ('/newPage/{subNewPage}', [MainController::class, "acSubNewPage"]);




// сработает на http://muzei-mira/console
Route::get ('/console', [AdminController::class, "acConsole"]);

// сработает на http://muzei-mira/console/update/{параметр}
// запрос на вывод страницы обновления записи
Route::get ('/console/update/{id}', [AdminController::class, "acConsoleFormUpdate"]);

// сработает на http://muzei-mira/console/add
// запрос на вывод страницы добавления записи
// обратите внимание - исползуется POST-запрос
Route::post ('/console/add', [AdminController::class, "acConsoleFormAdd"]);

// сработает на http://muzei-mira/admin/modification
// обратите внимание - исползуется POST-запрос
// передаем данные формы на обновление / добавление данных
Route::post ('/admin/modification',  [AdminController::class, "acDataModification"]);

// сработает на http://muzei-mira/admin/delete/{параметр}
// выполняем запрос на удаление данных
Route::get ('/admin/delete/{id}',  [AdminController::class, "acDataDelete"]);
