<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartment;
use App\Models\Customer;
use App\Models\Podezd;
use App\Models\Client;
use App\Models\Floor;
use App\Models\Dom;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin/home');
    }
    public function houses()
    {
        $dom = Dom::with('podezd')->get();
        // $apartment = Apartment::with('floor')->get(); 
        
        return view('admin.houses',compact('dom'));
    }

    public function clients()
    {
        $clients = Client::where('status', 0)->get();
        $customers = Customer::all();
        return view('admin.clients',compact('clients','customers'));

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
        $apartment = Apartment::with('floor')->where('status',0)->get();

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
        ]);

        return redirect()->route('houses');
    }

    public function clientsPost(Request $request)
    {
        $client = Client::where('id', $request->client)->first();
        // dd($client->apartment_id);
        Apartment::where('id',$client->apartment_id)->update([
            'status'=>1
        ]);
        Client::where('id', $request->client)->update([
            'status'=>1
        ]);
        Customer::create([
            'apartment_id'=>$client->apartment_id,
            'client_id' =>$request->client
        ]);
        return redirect()->route('houses');
    }
}
