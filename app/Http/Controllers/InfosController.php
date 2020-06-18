<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use App\User;

class InfosController extends Controller
{
  /**
     * Restful controller ;)
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * By default the [front-end] section is comment. 
     * Comment or uncomment a section as desired, 
     * to display the corresponding view.
     */
    public function index()
    { 
      /* all informations */
      /*back-end
      $infos = Info::all();
      return view('infos.index',compact('infos'));
      */
      /*front-end*/
      return view('infos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
      /*back-end
      $users = User::all();
      $info = new Info();
      return view('infos.create',compact('users','info'));
      */
      /*front-end*/
      return view('info');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info = request()->validate([
         'type' => 'required',
         'title' => 'required',
         'tags' => 'required',
         'info_content' => 'required',
         'receiver_wording' => 'required|numeric',
         'sender_id' => 'required|numeric',
         'info_cover_pic' => 'string'
      ]);
      Info::create($info);
      return redirect()->route('infos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        /*back-end
        return view('infos.show',compact('info'));
        */
        /*front-end*/
         return view('/infos/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        return view('infos.edit',compact('users','info'));
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
         'type' => 'required',
         'title' => 'required',
         'tags' => 'required',
         'info_content' => 'required',
         'receiver_wording' => 'required|numeric',
         'sender_id' => 'required|numeric',
         'info_cover_pic' => 'string'
      ]);
      $info->update($data);
      return redirect('infos/show/'.$info->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info->destroy();
        return redirect()->route('infos.index');
    }
}
