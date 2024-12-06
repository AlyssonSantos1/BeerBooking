<?php

namespace App\Http\Controllers;

use App\Models\Locker;
use Illuminate\Http\Request;

use function Pest\Laravel\delete;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    public function newbeer (Request $request){
        $Locker = $request->Locker;
        Locker::create([

            'name' => $request->name_beer,
            'alcoholbyvolume' => $request->alcoholbyvolume_beer,
            'price' => $request->price_beer,
            'type' => $request->type_beer,

        ]);

        return view ('sucessful');

    }

    public function sucess (){
        return view('newbeer');

    }

    public function edit (Request $request, int $id){
        $locker = Locker::findorfail($id);
        return view ('editdrink', compact('locker'));

    }

    public function update (Request $request, int $id){
        $locker = Locker::findorfail($id);
        $locker->name = $request->name_beer;
        $locker->alcoholbyvolume = $request->alcoholbyvolume_beer;
        $locker->price = $request->price_beer;
        $locker->type = $request->type_beer;
        $locker->save();
        return view ('change', compact('locker'));       
        

    }

    public function delete (Request $request, int $id){
        $locker = Locker::findorfail($id);
        $locker->delete();
        return view('delete', compact('locker'));
    }

    public function trash (){
        return view('excluded');
    }

    public function list (){
        $locker = Locker::all();
        return view('listed', compact('locker'));
    }

    public function listone (Request $request, int $id){
        $locker = Locker::findorfail($id);
        return view('listone', compact('locker'));
    }
}



