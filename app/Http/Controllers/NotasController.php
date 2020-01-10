<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use \App\Notas;

class NotasController extends Controller
{

  // public function show($titulo)//($post)
  // {
  //   return view('Welcome', [
  //     'Tnotas' => Notas::where('titulo', $titulo)->firstorfail()//if not, abort
  //   ]);
  // }

  // public function show($notas)
  // {
  //   return view('start',[
  //     'notas'=>Notas::latest()->get()
  //   ]);
  // }
  public function newNota()
  {
    // dump(request()->all());
    $notas = new Notas();

    $notas->titulo = request('titulo');
    $notas->cuerpo = request('cuerpo');

    $notas->save();

    return redirect('/start');
  }
  //
  // public function edit($Id)
  // {
  //   $notas = Notas::find($Id)
  //   return view('start.edit', compact('notas'));
  // }

  // public function updateAfterEdit()
  // {
  //
  //   $notas = Notas::find($id)
  //
  //   $notas->titulo = request('titulo');
  //   $notas->cuerpo = request('cuerpo');
  //
  //   $notas->save();
  //
  //   return redirect('/start');
  // }





}
