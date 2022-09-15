<?php

use Illuminate\Http\Request;
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
});

Route::get("events", "EventController@index");
Route::get("events/{event}", "EventController@show");
Route::post("events", "EventController@store");
Route::patch("events/{event}", "EventController@update");
Route::delete("events/{event}", "EventController@destroy");

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
