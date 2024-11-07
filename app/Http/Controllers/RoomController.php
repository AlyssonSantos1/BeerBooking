<?php

namespace App\Http\Controllers;

use app\Models\Locker;
use Illuminate\Http\Request;

use function Pest\Laravel\delete;

class RoomController extends Controller
{
    public function newbeer (request $request){
        $Locker = $request->Locker;
        Locker::created([

            'name' => $Locker->name_beer,
            'description' => $Locker->description_beer,
            'price' => $Locker->price_beer,
            'type' => $Locker->type_beer,

        ]);

    }

    public function editdrink (Request $request, int $id){
        $locker = Locker::findorfail($id);
        return view('editdrink');

    }

    public function delete (Request $request, int $id){
        $locker = Locker::findorfail($id);
        $locker->delete();
    }
}


