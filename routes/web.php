<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/chi-siamo',function(){
//     $title = 'Chi Siamo (da variabile)';
//     return view('chi-siamo',['title'=>$title]);
// });

// Route::get('/contatti',function(){
//     $title = 'Contatti';
//     return view('contatti',['title'=>$title]);
// });

// Route::get('/articoli',function(){
//     $title = 'Articoli';
//     return view('articoli',['title'=>$title]);
// });

Route::get('/',function(){
    $nome = 'Marco';
    $cognome='Accetta';
    $title='Sto impazzendo';
    return view('home', compact('nome','cognome','title'));
})->name('home');

Route::get('/articoli',function(){
    $articles = [
        1 => ['title' => 'Primo Ciao','category'=> 'dogs','description'=>'lorem non funziona ma ci sono cani'],
        2 => ['title' => 'Secondo Ciao', 'category'=> 'sport','description'=>'lorem non funziona ma sport'],
        3 => ['title' => 'Terzo Ciao', 'category'=> 'medicine','description'=>'lorem non funziona ma ci sono OKI'],
    ];
    
    return view('articles',['articles'=>$articles]);
})->name('articles');



Route::get('/articoli/{id}',function($id){
    $articles = [
        1 => ['title' => 'Primo Ciao', 'category'=> 'dogs','description'=>'lorem non funziona ma ci sono cani'],
        2 => ['title' => 'Secondo Ciao', 'category'=> 'sport','description'=>'lorem non funziona ma sport'],
        3 => ['title' => 'Terzo Ciao', 'category'=> 'medicine','description'=>'lorem non funziona ma ci sono OKI'],
    ];
    if(! array_key_exists($id,$articles)){
        abort(404);
    }

    return view('articles_view',['article'=>$articles[$id]]);

})->name('articles.view');





Route::get('/chi-siamo',function(){
    $title = 'Chia Siamo (da variabile)';

    $data = [
        'Pino', 'Peppe', 'Palla',
    ];
    return view('chi-siamo',['title'=>$title, 'persons'=>$data]);
})->name('about-us');