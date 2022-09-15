<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("events", "EventController@index");
Route::get("events/{event}", "EventController@show");
Route::post("events", "EventController@store");
Route::patch("events/{event}", "EventController@update");
Route::delete("events/{event}", "EventController@destroy");

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
