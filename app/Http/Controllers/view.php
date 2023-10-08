<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class view extends Controller
{
    public function showUser()
    {

        $user = DB::table('crud_data')->get();
        return view('viewUser', ['data' => $user]);

        // is ma ham ak single data ko fatch kr ka dakh saktay ha ya ham na where ki condition lagai ha
        // $user = DB::table('crud_data')->where('id',1)->get();

        // is ma hamay where or get ki zarrort ni parti find hamay array ma data bhajta ha
        // $user = DB::table('crud_data')->find(2);


        // return $users;

        // ham get function hata ka direct user insert karay ga to hamay zada data show ho ga ka ham is ma kia kia use kr saktay ha

        // jub han dd use karay ga to is ka bad vala code ni chalay ga jasay ham php ma die use krtay tha
        // dd($users);

        // is ma dump use krnay ga to agay ka bhi code chalta rahay ga
        // dump($users);


    }

    public function addUser(Request $add)
    {
        $user = DB::table('crud_data')
                    ->insert
                    ([
                        'name' => $add->name,
                        'email' => $add->email,
                        'phone' => $add->phone

                    ]);
                    if($user){
                        return redirect()->route('home');
                    }
    }

    // insertOrIgnore is the laravel function if my data is already in the data the data will not enter the data in a database
    // upsert  function is also use to eneter data but in condition the data will automatically update the data in database and also define the 2 parmeteer in this parameter you can define the unique value
    // InsertGetId sa hamay ya pata chal jata ha ka new record jo add hua ha ous ki id kia ha data insert hona ka bad hamay ya id show kr data ha ka kon si new id add hui ha

    public function updatePage(string $id){
        $user= DB::table('crud_data')->find($id);
        return view('updateUser' , ['data'=> $user]);


    }

    public function updateUser(Request $update , $id)
    {
        $user = DB::table('crud_data')
                    ->where('id',$id)
                    ->update
                    ([
                        'name' => $update->name,
                        'email' => $update->email,
                        'phone' => $update->phone

                    ]);
                    if($user){
                        return redirect()->route('home');
                    }
    }
    // UpdateOrInsert ya ham is lia use krta ha ka ham agar data update ka lia agar /ham email or nam da day to to age ko update karay to data update ho jay agar or nam ka data ni milay ga to new data ko add kr da ga
    // increment  use kr saktay ha is ka hamari age ma default plus 1 ho jay ga agar hamay zada ka plus chaya to ham zada ka plu sbhi bhaj saktay ha

    public function deleteUser(string $id)
    {
        $user = DB::table('crud_data')
                    ->where('id',$id)
                    ->delete();

            if($user){
                return redirect()->route('home');
            }
    }
}
