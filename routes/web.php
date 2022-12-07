<?php

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
date_default_timezone_set('CET');

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
Auth::routes();

Route::get('', function () {
    return view('index', ['name' => 'World']);
});

Route::get('/', function () {
    $time = date('H');
    $greeting = ($time < 12) ? 'Good morning' : (($time < 18) ? 'Good afternoon' : 'Good evening');
    
    // get the user name from the session if it exists
    $userName = (Session::has('name')) ? Session::get('name') : $userName = 'Login';


    $completeDate = date('D d M Y');

    return view(
        'index', 
        [
            'name' => ($userName == 'Login') ? 'Guest' : $userName,
            'greeting' => $greeting,
            'time' => $completeDate,
            'user' => $userName
        ]
    );
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
