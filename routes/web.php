<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('login');
});

Route::get('/dashboard', function () {
    return 'anda login sebagai ' . auth()->user()->email;
})->middleware('auth');

Route::get('/auth/github/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/github/callback', function () {
    $userGithub = Socialite::driver('github')->user();

    $user = User::updateOrCreate([
        'github_id' => $userGithub->id,
    ], [
        'name' => $userGithub->nickname,
        'email' => $userGithub->email,
        'password' => Hash::make('rahasia'),
        'github_token' => $userGithub->token,
        'github_refresh_token' => $userGithub->refreshToken,
    ]);
    
    Auth::login($user);
 
    return redirect('/dashboard');
});
