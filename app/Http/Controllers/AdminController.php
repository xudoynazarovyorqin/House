<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dom;
use App\Models\Podezd;
use App\Models\Floor;
use App\Models\Apartment;

class AdminController extends Controller
{
    public function houses()
    {
        $dom = Dom::with('podezd')->get();
        // $apartment = Apartment::with('floor')->get(); 
        
        return view('admin.houses',compact('dom'));
    }

    public function clients()
    {

        return view('admin.clients');

    }

    public function addHouse()
    {

        return view('admin.add-house');

    }

    public function addHousePost(Request $request)
    {

        Dom::create([
            'name' => $request->name,
            'photo' => $request->photo,
            'address' => $request->address
        ]);

        return redirect()->route('houses');
    }

    public function houseShow(Request $request)
    {

        $dom = Dom::where('id', $request->id)->first();
        $podezd = Podezd::with('dom')->get();
       

        return view('admin.house', compact('dom','podezd'));

    }

    public function addPodezd()
    {

        return view('admin.add-podezd');

    }

    public function addPodezdPost(Request $request)
    {
        // dd($request);
        Podezd::create([
            'number' => $request->name,
            'dom_id' => $request->dom_id
        ]);

        return redirect()->route('houses');

    }

    public function floor(Request $request)
    {
        $podezd = Podezd::where('id',$request->podezd)->first();
        $floor = Floor::with('podezd')->get();

        return view('admin.floor',compact('podezd','floor'));
    }

    public function addFloor(Request $request)
    {

        return view('admin.add-floor');

    }

    public function addFloorPost(Request $request)
    {
        // dd($request);
        Floor::create([
            'number' => $request->number,
            'podezd_id' => $request->podezd_id
        ]);

        return redirect()->route('houses');
    }

    public function apartment(Request $request)
    {
        $floor = Floor::where('id',$request->floor)->first();
        $apartment = Apartment::with('floor')->get();

        return view('admin.apartment',compact('floor','apartment'));
    }

    public function addApartment(Request $request)
    {

        return view('admin.add-apartment');

    }

    public function addApartmentPost(Request $request)
    {
        // dd($request);
        Apartment::create([
            'number' => $request->number,
            'floor_id' => $request->floor_id,
            'room' => $request->room,
            'cost' => $request->cost,
            'name' => 0,
            'status' => 0
        ]);

        return redirect()->route('houses');
    }
}
