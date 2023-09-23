<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = [
        "message" => "Benvenuti in Laravel Primi Passi",
        "definizione" => "Laravel è un Framework che rende più facile la creazione dei siti web e applicazione web. e come un set di lego per svilupatori web che permette di costruire siti web in modo più veloce e facile  " ,
        "creazione" => "Nella directory Resources/views, elimino ul file welcome.blade.php e creo un nuovo file chiamato home.blade.php"
    ];
    return view('home', $data);
});
