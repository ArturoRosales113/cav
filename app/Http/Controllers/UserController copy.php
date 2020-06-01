<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Validator;
//Mails
use Illuminate\Support\Facades\Mail;
use App\Mail\NewUser;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('backend.user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('backend.user.create', ['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $input = $request->all();
      $rules = [
      'name' => 'required',
      'email' => 'required|email|unique:users,email',
      'role_id' => 'not_in:0',
     ];
      $messages = [
      'name.required' => 'El campo "Nombre" es obligatorio',
      'email.required' => 'El campo "Email" es obligatorio',
      'role_id.not_in' => 'Debes seleccionar una rol',
   ];
      $validator = Validator::make($input, $rules, $messages);
      if ($validator->fails()) {
          //dd($validator);
          return redirect()->back()
      ->withErrors($validator)
      ->withInput();
      } else {
          $password = str_replace(' ', '', strtolower($input['name'])).str_random(6);
          $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => bcrypt($password),
           ]);
           $user->roles()->attach($input['role_id']);
        //    Mail::to($user->email)
        //   ->send(new NewUser($password));
          return redirect()->route('user.index');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('backend.user.edit',['user' => $user,'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $input = $request->all();
      //dd($input);
      $rules = [
      'name' => 'required',
      'email' => 'required|email|unique:users,email,'.$id,
      'role_id' => 'not_in:0',
     ];
      $messages = [
      'name.required' => 'El campo "Nombre" es obligatorio',
      'email.required' => 'El campo "Email" es obligatorio',
      'role_id.not_in' => 'Debes seleccionar una rol',
   ];
      $validator = Validator::make($input, $rules, $messages);
      if ($validator->fails()) {
          //dd($validator);
          return redirect()->back()
      ->withErrors($validator)
      ->withInput();
      } else {
          $user = User::find($id);
          $user->update([
            'name' => $input['name'],
            'email' => $input['email'],
           ]);
           $user->save();
           $user->roles()->sync($input['role_id']);
          return redirect()->route('user.index');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
