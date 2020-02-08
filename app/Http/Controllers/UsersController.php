<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class UsersController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function newUser()
  {
    // dump(request()->all());
    // request()->validate([
    //   'name'->'required',
    //   'email'->'required',
    //   'password'->'required'
    // ]);
    $user = new User();

    $user->name = request('name');
    $user->email = request('email');
    $user->password = request('password');
    $user->save();

    return redirect('/start');
  }
  public function show($id)
  {

  }

  //
  // /**
  // * Store a newly created resource in storage.
  // *
  // * @param  \Illuminate\Http\Request  $request
  // * @return \Illuminate\Http\Response
  // */
  // public function store(Request $request)
  // {
  //   //
  // }
  //
  // /**
  // * Display the specified resource.
  // *
  // * @param  int  $id
  // * @return \Illuminate\Http\Response
  // */

  // /**
  // * Show the form for editing the specified resource.
  // *
  // * @param  int  $id
  // * @return \Illuminate\Http\Response
  // */
  // public function edit($id)
  // {
  //   //
  // }
  //
  // /**
  // * Update the specified resource in storage.
  // *
  // * @param  \Illuminate\Http\Request  $request
  // * @param  int  $id
  // * @return \Illuminate\Http\Response
  // */
  // public function update(Request $request, $id)
  // {
  //   //
  // }
  //
  // /**
  // * Remove the specified resource from storage.
  // *
  // * @param  int  $id
  // * @return \Illuminate\Http\Response
  // */
  // public function destroy($id)
  // {
  //   //
  // }
}
