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

Route::get('/registro', function(){
  return view('registro');
});

Route::get('/start', function(){
  return view('start');
});

// Route::get('/posts/{Tnotas}', 'PostsController@show');
// Route::get('/posts/{post}', 'PostsController@show');
