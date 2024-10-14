<?php

   use Illuminate\Support\Facades\Route;

   Route::get('/halo', [App\Http\Controllers\HalamanController::class, 'selamatDatang']);
   Route::get('/halo', function () {
       return 'Halo, Selamat Datang di Laravel!';
   });



