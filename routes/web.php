  <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
  return view('Welcome');
});

Route::get('/start', function(){
  return view('start',[
    'notas'=>App\Notas::latest()->get()
  ]);
});

Route::get('/registro', function(){
  return view('registro');
});

Route::post('/start', 'NotasController@update');
Route::get('/start/{Id}/edit', 'NotasController@edit');
Route::put('/start', 'NotasController@update');

// Route::get('/posts/{Tnotas}', 'PostsController@show');
// Route::get('/posts/{post}', 'PostsController@show');
