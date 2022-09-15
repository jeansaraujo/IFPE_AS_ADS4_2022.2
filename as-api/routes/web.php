<?php

use Illuminate\Support\Facades\Route;

Route::get("lists",function(){
    $events = [
        [
            "id" => 1,
            "name" => "Magia do Natal",
            "dtEvent" => '2022-12-24'
        ],
        [
            "id" => 1,
            "name" => "Festival de Inverno",
            "dtEvent" => '2022-07-10'
        ]
    ];
    return $events;
});

Route::get('/', function () {
    return view('welcome');
});
