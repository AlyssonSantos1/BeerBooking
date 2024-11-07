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

    public function editdrink (Request $request, int $id){
        $locker = Locker::findorfail($id);
        $locker->name = $request->name;
        $locker->description = $request->descritption;
        $locker->price =  $request->description;
        $locker->type = $request->type;


        return response()->json($locker);

    }

    public function delete (Request $request, int $id){
        $locker = Locker::findorfail($id);
        if($locker->delete()){
            return response()->json([
                'status' => 'deleted',
                'message' => 'The beer has been deleted'

            ], 200);
        } return response()->json([
            'status' => 'error',
            'message' => 'Beer not found'
        ], 400);
    }
}


