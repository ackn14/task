<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profiles;

use App\Profilehistory;

use Carbon\Carbon;

class ProfileController extends Controller
{
    //
    public function add()
    {
      return view('admin.profile.create');
    }

    public function create(Request $request)
      {
          
          $this->validate($request, Profiles::$rules);
          
          $profile=new Profiles;
          $form = $request->all();
          
          unset($form['_token']);
          
          $profile->fill($form);
          $profile->save();
          
          return redirect('admin/profile/create');
      }
 
    public function index(Request $request){
        $cond_title = $request->cond_title;
        if($cond_title != ''){
            //検索されたら検索結果を取得する
            $posts = Profiles::where('name', $cond_title)->get();
        } else {
            //それ以外は全てのニュースを取得する
            $posts = Profiles::all();
        }
        return view('admin.profile.index', ['posts' => $posts, 'cond_title'
        => $cond_title]);
    }
    
     public function edit(Request $request)
     {
        $profile = Profiles::find($request->id);
        if(empty($profile)){
            abort(404);
        }
        return view('admin.profile.edit',['profile_form' => $profile]);
     }
     
     public function update(Request $request)
     {
        $this->validate($request, Profiles::$rules);
        $profile = Profiles::find($request->id);
        
        $profile_form = $request->all();
        unset($profile_form['_token']);
        unset($profile_form['remove']);
        
        $profile->fill($profile_form)->save();
        
        $ProfileHistory = new Profilehistory;
        $ProfileHistory->profile_id = $profile->id;
        $ProfileHistory->edited_at = Carbon::now();
        $ProfileHistory->save();
        
        return redirect('admin/profile');
     }
     
    public function delete(Request $request){
        $profile = Profiles::find($request->id);
        
        $profile->delete();
        return redirect('admin/profile/');
    }
     
}
