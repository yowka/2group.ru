<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return "Welcome";
});
Route::get('/dir/test', function () {
    return "Welcome to my group";
});
Route::get('/user/{id}', function ($id) {
    return 'Пользователь ' . $id;
});
Route::get('/post/{id}', function ($id, $surname = "Скирневский", $name = "Стас") {
    return $surname . ' ' . $name;
});
Route::get('/posts/{id}', function ($id) {
    return 'пост ' . $id;
})->where('id', '[0-9]+');
