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

      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    { 
      $infos = Info::paginate(2);
      return view('infos.index',compact('infos'));
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
     
      */
      /*front-end*/
      return view('infos.create');
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
         'title' => 'required|string',
         'tags' => 'required|string',
         'info_content' => 'required|string',
         'receiver_wording' => 'required|string',
         'cover' => 'nullable|image',
      ]);
      if(request('cover') != null) {
        $extension = $info['cover']->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $info['cover']->move('storage/infos_pictures/',$filename);
        $info['info_cover_pic'] = 'infos_pictures/'.$filename;
      }
      else {
          $info['info_cover_pic'] = null;
      }
      $info['sender_id'] = Auth::user()->id;

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
      return view('info.show',compact('info'));
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
    public function getPrivateInfosForUniv($school) {
      $infos = Info::where('receiver_wording',$school)->get();
      return $infos;
    }

    public function getPublicInfosForUniv() {
      $infos = Info::where('receiver_wording',null)->get();
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
      ->where('receiver_wording',null)
      ->get();
      return $infos;
    }

    /**Private infos
     * @param int $id //sender id
     * @param string $school
     * @return arra
     */
    public function getPrivateInfosPublishedByUser($id,$school) {
      $infos = Info::where('sender_id',$id)
      ->where('receiver_wording',$school)
      ->get();
      return $infos;    
    }
}
