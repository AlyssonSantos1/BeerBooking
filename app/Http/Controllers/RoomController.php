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
            'description' => $request->description_beer,
            'price' => $request->price_beer,
            'type' => $request->type_beer,

        ]);

        return "Spirit is Added";

    }

    public function editdrink (Request $request, int $id){
        $locker = Locker::findorfail($id);
        return view('editdrink');

    }

    public function update (Request $request, int $id){
        $locker = Locker::findorfail($id);
        $locker->name = $request->name;
        $locker->description = $request->description;
        $locker->price = $request->price;
        $locker->type = $request->type;
        $locker->save();
    }

    public function delete (Request $request, int $id){
        $locker = Locker::findorfail($id);
        $locker->delete();
    }

    public function listed (Request $request){
        $locker = Locker::all();
        return view('listed');
    }
}


