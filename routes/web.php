<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about.about', ["name"=>"gourav indoriya"]);
});
Route::get('/tag', function () {
    $teas=[
        ['name' => 'Green Tea', 'price' => 10, 'description' => 'A refreshing green tea with a hint of mint.'],
        ['name' => 'Black Tea', 'price' => 15, 'description' => 'A robust black tea with a rich flavor.'],
        ['name' => 'Herbal Tea', 'price' => 12, 'description' => 'A soothing herbal tea with chamomile and lavender.'],
        ['name' => 'Oolong Tea', 'price' => 18, 'description' => 'A delicate oolong tea with floral notes.'],
        ['name' => 'White Tea', 'price' => 20, 'description' => 'A light and subtle white tea with a hint of sweetness.']
    ];

    return view('tag.tag',['tea'=>$teas]);
});

Route::get('/tag/{id}', function ($id) {
    $teas=[
        ['name' => 'Green Tea', 'price' => 10, 'description' => 'A refreshing green tea with a hint of mint.'],
        ['name' => 'Black Tea', 'price' => 15, 'description' => 'A robust black tea with a rich flavor.'],
        ['name' => 'Herbal Tea', 'price' => 12, 'description' => 'A soothing herbal tea with chamomile and lavender.'],
        ['name' => 'Oolong Tea', 'price' => 18, 'description' => 'A delicate oolong tea with floral notes.'],
        ['name' => 'White Tea', 'price' => 20, 'description' => 'A light and subtle white tea with a hint of sweetness.']
    ];

    return view('tag.tag',['tea'=>[$teas[$id-1]]]);
});
