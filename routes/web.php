<?php

use Illuminate\Routing\Route as RoutingRoute;
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
    $data = [
        "pageTitle" => "Welcome to Boolean!",
        "menuItems" => [
            "Our Team",
            "Our Classes",
            "Contacts"
        ]
    ];
    return view('home', $data);
});

Route::get('/our-team', function () {
    $data = [
        "teachers" => "Olga Demina",
        "tutors" => [
            "Marco Acciarri",
            "Mauro Constantinescu"
        ],
        "service" => [
            "Adriano Grimaldi",
            "Eugenia Faiola",
            "Andrea Ricci"
        ]
    ];
    return view('team', $data);
});
