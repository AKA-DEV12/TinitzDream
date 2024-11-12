<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AffichageController;

Route::get('/', function () {
    return view ('pages.index');
})->name('index');
                                                                                        
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('menu')->group(function () {
    Route::get('/obtenir-mon-application', function(){
        return view('pages.application');
    })->name('obtenir-application');
    Route::get('/connecter-ma-maison', function(){
        return view('pages.domotique');
    })->name('maison-connectee');
    Route::get('/tracking-gps', function(){
        return view('pages.tracking');
    })->name('tracking-gps');
    Route::get('/realisation', function(){
        return view('pages.realisation');
    })->name('voir-realisation');
    Route::get('/contact', function(){
        return view('pages.contact');
    })->name('contact');
    Route::get('/contact-demande', function(){
        return view('pages.contact-demande');
    })->name('contact-demande');
});
Route::prefix('contact')->group(function(){

    Route::get('/soumettre-projet', function(){
        return view('pages.soumettre-projet');
    })->name('soumettrePJ');
    Route::get('/offre-emploi', function(){
        return view('pages.tbl');
    })->name('tbl');

});
Route::prefix('realisation')->group(function(){
    Route::get('/tous', function(){
        return view('pages.realisation');
    })->name('allR');


    Route::get('/presse-ci', function(){
        return view('pages.realisation.pages.projet1');
    })->name('presse-ci');

    Route::get('/adam-tpi', function(){
        return view('pages.realisation.pages.projet2');
    })->name('adam-tpi');

    Route::get('/dhaxle', function(){
        return view('pages.realisation.pages.projet3');
    })->name('dhaxle');

    Route::get('/letempsinfos', function(){
        return view('pages.realisation.pages.projet4');
    })->name('letempsinfos');

    Route::get('/letemps', function(){
        return view('pages.realisation.pages.projet5');
    });
    Route::get('/worolux', function(){
        return view('pages.realisation.pages.projet7');
    })->name('worolux');

    Route::get('/go-taxi', function(){
        return view('pages.realisation.pages.projet8');
    })->name('go-taxi');

    Route::get('/istcjf', function(){
        return view('pages.realisation.pages.projet10');
    })->name('istcjf');

    Route::get('/Pharmaconsults', function(){
        return view('pages.realisation.pages.projet12');
    })->name('Pharmaconsults');

    Route::get('/gamaliel', function(){
        return view('pages.realisation.pages.projet13');
    })->name('gamaliel');

    Route::get('/phania-v', function(){
        return view('pages.realisation.pages.projet14');
    })->name('phania-v');

    Route::get('/la-douce-france', function(){
        return view('pages.realisation.pages.projet15');
    })->name('la-douce-france');

    Route::get('/sol-beni', function(){
        return view('pages.realisation.pages.projet17');
    })->name('sol-beni');

    Route::get('/abidjanstars', function(){
        return view('pages.realisation.pages.projet18');
    })->name('abidjanstars');

    Route::get('/food-chapchap', function(){
        return view('pages.realisation.pages.projet22');
    })->name('food-chapchap');
   
});

Route::post('traitement', [MessageController:: class, 'store'])->name('traitement');
require __DIR__.'/auth.php';
