<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-marker', function(){
    return view('add_marker');
})->name('add-marker');

Route::get('/add-many-marker', function(){
    return view('add_many_marker');
})->name('add-many-marker');

Route::get('/marker-info-window', function(){
    return view('marker_info_window');
})->name('marker-info-window');

Route::get('/custom-icon-marker', function(){
    return view('custom_icon_marker');
})->name('custom-icon-marker');

Route::get('/geolocation-api', function(){
    return view('geolocation_api');
})->name('geolocation-api');

Route::get('/geolocation-api-live-update', function(){
    return view('geolocation_api_live_update');
})->name('geolocation-api-live-update');

Route::get('/draw-circle', function(){
    return view('draw_circle');
})->name('draw-circle');

Route::get('/draw-polyline', function(){
    return view('draw_polyline');
})->name('draw-polyline');

Route::get('/draw-polygon', function(){
    return view('draw_polygon');
})->name('draw-polygon');
