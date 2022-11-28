<?php

use Illuminate\Support\Facades\Auth;
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

// **Create Token Testing
// 
// Route::get('/setup', function() {
//     $credentials = [
//         'email' => 'admin@admin.com',
//         'password' => 'password'
//     ];

//     if ( Auth::attempt($credentials) ) {
//         $user = Auth::user();

//         $adminToken = $user->createToken('admin-token', ['create', 'update', 'delete']);
//         $basicToken = $user->createToken('basic-token', ['none']);

//         return [
//             'admin' => $adminToken->plainTextToken,
//             'basic' => $basicToken->plainTextToken
//         ];
//     }
// });