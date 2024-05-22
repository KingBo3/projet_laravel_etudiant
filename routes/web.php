<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Etudiantcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/etudiant',[Etudiantcontroller::class,'liste_etudiant']);
Route::get('/ajouter',[Etudiantcontroller::class,'ajouter_etudiant']);
Route::get('/ajouter/traitment',[Etudiantcontroller::class,'ajouter_etudiant_traitment']);
Route::get('/update-etudiant/{id}',[Etudiantcontroller::class,'update_etudiant']);
Route::get('/update/traitment',[Etudiantcontroller::class,'update_etudiant_traitment']);
Route::get('/delete-etudiant/{id}',[Etudiantcontroller::class,'delete_etudiant']);