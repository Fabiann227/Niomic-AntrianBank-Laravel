<?php

Route::get('/', 'Antrian@index');
Route::get('/antri_cs/{id}/{id1}/{id2}', 'Antrian@antri_cs');
Route::get('/antri_teller1/{id}/{id1}/{id2}', 'Antrian@antri_teller1');
Route::get('/antri_teller2/{id}/{id1}/{id2}', 'Antrian@antri_teller2');