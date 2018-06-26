<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            $data = [
                'user' => $user,/*name,e-mail,password*/
                'profile' =>$profile,
                  ];
              return view('ranking.ranking', $data);
             }else {
            return view('welcome');
             }
            
    
//0～30までのランダムな数字
/*   $num = range(0,30);
shuffle($num);
$result = implode(",", $num);
echo $result;  */

             
             $users = DB::table('users')->count();
             $num=range(1,$users);
             shuffle($num);
             foreach($num as $random_num){
             echo $random_num;
             
             
             /*この後、抽出作業する*/
    
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
