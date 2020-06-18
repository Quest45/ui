<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
  /**
     * Restful controller ;)
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $users = User::all();
        return view ('users.index',compact('users'));
    
        /* Front-end
        return view('confirm')*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view('users.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = request()->validate([
          'name' => 'required',
          'email' => 'required|email',
          'password' => 'required',
          'role' => 'required',
          'phone' => 'required',
          'user_pic_file' => 'mimes:jpg,jpeg,png',
          'user_faculty' => 'string',
          'card_token' => 'string',
          'ue_token' => 'string'
        ]);
        $path = request('user_pic_file')->store('pictures','public');
        $user['user_pic'] = $path;
        User::create($user);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {     
      /* backend
         return view('users.show',compact('user'));
        */
        /*frond-end*/
        return view ('users/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('users.edit',compact('user'));
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
         $data = request()->validate([
         'name' => 'required',
         'email' => 'required|email',
         'password' => 'required',
         'role' => 'required',
         'phone' => 'required',
         'user_pic_file' => 'mimes:jpg,jpeg,png',//fichier immage
         'user_faculty' => 'string',
         'card_token' => 'string',
         'ue_token' => 'string'
       ]);
       if(isset($_FILES['user_pic_file']) AND $_FILES['user_pic_file']['error'] == 0 ){
         $path = request('user_pic_file')->store('pictures','public');
         $data['user_pic'] = $path;
      }
      else{
         $data['user_pic'] = $user->user_pic;
      }
       $user->update($data);
       return redirect('users/show/'.$user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user->destroy();
        return redirect()->route('users.index');
    }

 }
 
