<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        if(request('user_pic_file') != null) {
          $extension = $user['user_pic_file']->getClientOriginalExtension();
          $filename = time().'.'.$extension;
          $user['user_pic_file']->move('storage/users_pictures/',$filename);
          $user['user_pic'] = 'users_pictures/'.$filename;
          }
        else {
            $user['user_pic'] = null;
        }
        User::create($user);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
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
    public function edit(User $user)
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
    public function update(User $user)
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
       if(request('user_pic_file') != null) {
        $extension = $user['user_pic_file']->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $user['user_pic_file']->move('storage/users_pictures/',$filename);
        $user['user_pic'] = 'users_pictures/'.$filename;
        }
       else {
            $user['user_pic'] = $user->user_pic;
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
    public function destroy(User $user)
    {
      if($user->user_pic != null) {
        Storage::delete($user->user_pic);
      }
      $user->delete();
      return redirect()->route('users.index');
    }

 }
 
