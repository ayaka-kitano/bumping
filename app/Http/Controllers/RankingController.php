<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class RankingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          if (\Auth::check()) {
            $user = \Auth::user();
            $profile=$user->profile()->getResults();
            
            $users = \DB::table('users')->count();
             $num=range(1,$users);
             shuffle($num);
             $i=1;
             foreach($num as $random_num)
             
             {if($i> 2){
                 break;
             }
            
                 $favorite_user = User::find($random_num);
                 if($user->id!== $favorite_user->id){
                 $favorite_users[] = $favorite_user;
                               $i++;
                 }
                 
 
               
               
             }
             
             
             
            $data = [
                'favorite_users'=>$favorite_users,
                  ];
              return view('ranking.ranking', $data);
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
