<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\DemoSingleActionController;
use App\Http\Controllers\ResponseController;
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
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, World!';
});

Route::post('/test', function () {
    echo 'Sample test request which cant be done directly through browser unless post request served, for now can be checked through postman or any api client';
});

Route::get('/soumya', function () {
    return view('soumya');
});

Route::get('/about/1', function () {
    $fname = "Soumya";
    $lname = "Tripathy";
    return view('about.about1', compact('fname', 'lname'));
});

Route::get('/about/2', function () {
    return view('about.about2');
});

Route::get('/sampleController', [SampleController::class, 'user']);

Route::get('/invokedController', [DemoSingleActionController::class, '__invoke']);

Route::resource('responseController', ResponseController::class);