<?php

namespace App\Http\Controllers;

use App\Info;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
      return view('infos/info');
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
      if(request('info_cover_pic') != null) {
        $extension = $info['info_cover_pic']->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $info['info_cover_pic']->move('storage/infos_pictures/',$filename);
        $info['info_cover_pic'] = 'infos_pictures/'.$filename;
      }
      else {
          $info['info_cover_pic'] = null;
      }
      $info->sender_id = Auth::user()->id;
      Info::create($info);
      return redirect()->route('infos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Info $info)
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
    public function edit(Info $info)
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
    public function update(Info $info)
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
      
      if(request('info_cover_pic') != null) {
        $extension = $data['info_cover_pic']->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $data['info_cover_pic']->move('storage/infos_pictures/',$filename);
        $data['info_cover_pic'] = 'infos_pictures/'.$filename;
      }
      else {
          $data['info_cover_pic'] = $info->info_cover_pic;
      }
      $info->sender_id = Auth::user()->id;
      $info->update($data);
      return redirect('infos/show/'.$info->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Info $info)
    {
        Storage::delete($info->info_cover_pic);
        $info->delete();
        return redirect()->route('infos.index');
    }
    /**
     * Get all informations from an university for a faculty
     * 
     * @param string $school
     * @return array
     */
    public function getInfosForUniv($school) {
      $infos = Info::where('receiver_wording',$school)->get();
      return $infos;
    }

    /**Public infos */
    public function getPublicInfosForUniv($school) {
      $infos = Info::where('receiver_wording',$school)
      ->where('type','public')
      ->get();
      return $infos;
    }

    /**Private infos */
    public function getPrivateInfosForUniv($school) {
      $infos = Info::where('receiver_wording',$school)
      ->where('type','private')
      ->get();
      return $infos;
    }

    /**
     * Get all the informations published by a user
     * The user has all the rights! user can be the school administration or other administration...
     * 
     * @param int $id
     */
    public function getInfosPublishedByUser($id) {
      $infos = Info::where('sender_id',$id);
      return $infos;
    }

    /**Public infos */
    public function getPublicInfosPublishedByUser($id) {
      $infos = Info::where('sender_id',$id)
      ->where('type','public')
      ->get();
      return $infos;
    }

    /**Private infos */
    public function getPrivateInfosPublishedByUser($id) {
      $infos = Info::where('sender_id',$id)
      ->where('type','private')
      ->get();
      return $infos;    
    }
}
