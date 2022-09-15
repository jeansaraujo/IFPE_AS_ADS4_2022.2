<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("lists",function(){
    $events = [
        [
            "id" => 1,
            "name" => "Magia do Natal",
            "dtEvent" => '2022-12-24'
        ],
        [
            "id" => 2,
            "name" => "Festival de Inverno",
            "dtEvent" => '2022-07-10'
        ]
    ];
    return $events;
});

Route::get("events",[EventController::class,"index"]);
Route::get("events/{event}", [EventController::class,"show"]);
Route::post("events", [EventController::class,"store"]);
Route::patch("events/{event}", [EventController::class,"update"]);
Route::delete("events/{event}", [EventController::class,"destroy"]);
