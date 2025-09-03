<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route ::get('/sorcerers', function () {
    $sorcerers = [
        ["name" => "yuji","abilities" => "cursed energy manipulation","id" => "1"],
        ["name" => "megumi","abilities" => "ten shadows technique","id" => "2"],
        ["name" => "nobara","abilities" => "straw doll technique","id" => "3"],

          
    ];
    return view('sorcerers.index', ["greeting" => "hello" , "sorcerers" => $sorcerers ]);
});

Route ::get('/sorcerers/{id}', function ($id) {

    return view('sorcerers.show', ["id" => $id ]);
});