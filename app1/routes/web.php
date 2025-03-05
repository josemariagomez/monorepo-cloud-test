<?php

use Altra\Domains\TestModel;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/test', function () {
    return TestModel::query()->where('name', 'like', '%a%')->whereNot('name', 'like', '%s')->count();
})->name('test');
