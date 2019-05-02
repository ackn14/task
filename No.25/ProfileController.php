<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

class ProfileController extends Controller
{
    //
    public function add()
    {
      return view('admin.profile.create');
    }

    public function create(Request $request)
      {
          
          $this->validate($request, Profile::$rules);
          
          $profiles=new Profile;
          $form = $request->all();
          
          unset($form['_token']);
          
          $profiles->fill($form);
          $profiles->save();
          
          return redirect('admin/profile/create');
      }
 
    public function index(Request $request){
        $cond_title = $request->cond_title;
        if($cond_title != ''){
            //検索されたら検索結果を取得する
            $posts = Profole::where('title', $cond_title)->get();
        } else {
            //それ以外は全てのニュースを取得する
            $posts = Profile::all();
        }
        return view('admin.profile.index', ['posts' => $posts, 'cond_title'
        => $cond_title]);
    }
    
     public function edit(Request $request)
     {
        $profile = Profile::find($request->id);
        if(empty($profile)){
            abort(404);
        }
        return view('admin.profile.edit',['profile_form' => $profile]);
     }
     
     public function update(Request $request)
     {
        $this->validate($request, Profile::$rules);
        $profile = Profile::find($request->id);
        
        $profile_form = $request->all();
        unset($profile_form['_token']);
        
        $profile->fill($profile_form)->save();
        
        return redirect('admin/profile');
     }
     
}
