<?php

namespace App\Http\Controllers;

use app\Models\Locker;
use Illuminate\Http\Request;


class RoomController extends Controller
{
    public function newbeer (request $request){
        $locker = $request->locker;
        Locker::created([

            'name' =>$locker['name'],
            'description'=>$locker['descritpion'],
            'price'=>$locker['price'],
            'type'=>$locker['type']

        ]);

        return response()->json($locker);
    }

    public function editdrink (Request $id){
        $locker = Locker::findorfail($id);
            'name' =>$locker['name'],
            'description'=>$locker['descritpion'],
            'price'=>$locker['price'],
            'type'=>$locker['type']


    }
}


