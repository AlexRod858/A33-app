<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//1 Crea una ruta que tenga un parámetro que sea opcional y 
// comprueba que funciona.
//2 Crea una ruta que tenga un parámetro que sea opcional y 
// tenga un valor por defecto en caso de que no se especifique.
Route::get('/usuario/{nombre?}', function ($nombre = 'Pepe') {
    return ($nombre);
});

/////////////////////////////////////////////
// Crea una ruta que atienda por POST y compruébala con Postman. 
// Si obtienes un error de tipo VerifyCsrfToken comenta la 
// línea correspondiente en el fichero kernel.php (carpeta Http). 
// Esto es un filtro para evitar ataques XSS (Cross-Site Scripting). 
// ¡Vuelve a descomentarla cuando termines con las prácticas!
Route::post('/publicar', function () {
    return view('welcome');
});