<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;


class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $profile=$user->profile()->getResults();
            $data = [
                'user' => $user,/*name,e-mail,password*/
                'profile' =>$profile,
                
                
            ];
            return view('users.show', $data);
        }else {
            return view('welcome');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $this->validate($request, [
            'content' => 'required|max:191',
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $profile=$user->profile()->getResults();
            if(!is_null($profile)){
            $data = [
                'user' => $user,/*name,e-mail,password*/
                'profile' =>$profile,
                
                
            ];
            return view('users.edit', $data);
            }else{
          
            $user->profile()->create([
            
        ]);
        $profile->$user->profile();
    
            $data = [
                'user' => $user,/*name,e-mail,password*/
                'profile' =>$profile,
                
            
            ];
            return view('users.edit', $data);
            }
        }else {
            return view('welcome');
        }
        
            
      
        
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
         $this->validate($request, ['age','sex','birthday','family','hometown','dislike','beento','comment'
             => 'max:191',
        ]);
        $profile=Profile::find($id);
       /*$profile= [
            'age' => $request->age,
            'sex' => $request ->sex,
            'birthday' => $request->birthday,
            'family' => $request ->family,
            'hometown' => $request->hometown,
            'dislike' => $request ->dislke,
            'beento' => $request->beento,
            'comment' => $request ->comment,
            ];*/
            $profile->age = $request->age;    /*$requestは入力データだから、入力データが$profileにはいり、saveする*/
            $profile->sex = $request->sex; 
            $profile->birthday = $request->birthday; 
            $profile->family = $request->family;
            $profile->hometown = $request->hometown;
            $profile->dislike = $request->dislike;
            $profile->beento = $request->beento;
            $profile->comment = $request->comment;
    
            $profile->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $micropost = \App\Profile::find($id);

        if (\Auth::user()->id === $profile->user_id) {
            $profile->delete();
        }

        return redirect()->back();
    }
}
