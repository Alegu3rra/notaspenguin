<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use \App\Notas;


class PostsController extends Controller
{
  public function show($titulo)//($post)
  {
    return view('Welcome', [
      'Tnotas' => Notas::where('titulo', $titulo)->firstorfail()//if not, abort
    ]);


    // $Tnotas = Notas::where('titulo', $titulo)->firstorfail();//if not, abort
    // return view('Welcome', [
    //   'Tnotas' => $Tnotas
    // ]);

    // $Tnotas = DB::table('notas')-> where('titulo', $titulo)->first();
    // dd($Tnotas);
    // $posts = [
    //   'my-first-post' => "hello, this is my first blog post!",
    //   'my-second-post' => "Now I getting  the hang of this blogging thing"
    // ];
    //
    // if(! array_key_exists($post, $posts)){
    //   abort(404, 'sorry, that post was not found.');
    // }
    // return view('Welcome', [
    //   'post' => $posts[$post]
    // ]);


  }
}
