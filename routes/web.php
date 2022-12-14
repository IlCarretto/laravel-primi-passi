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
            [
                "menuItem" => "Our Team",
                "hrefItem" => "/our-team"
            ],
            [
                "menuItem" => "Our Class",
                "hrefItem" => "/our-class"
            ],
            [
                "menuItem" => "Contacts",
                "hrefItem" => "/contacts"
            ]
        ],
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
        "services" => [
            "Adriano Grimaldi",
            "Eugenia Faiola",
            "Andrea Ricci"
        ]
    ];
    return view('team', $data);
});

Route::get('/our-class', function () {
    $data = [
        "students" => [
            "Leonardo",
            "Antonio",
            "Benito",
            "Ottavio",
            "Fabrizio",
            "Carlo",
            "etc etc"
        ]
    ];
    return view('class', $data);
});

Route::get('/contacts', function () {
    $data = [
        "socials" => [
            "Facebook",
            "Twitter",
            "Github",
            "Instagram",
            "TikTok"
        ]
    ];
    return view('contacts', $data);
});
