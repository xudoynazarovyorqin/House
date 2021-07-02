<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dom;
use App\Models\Podezd;
use App\Models\Floor;
use App\Models\Apartment;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doms = Dom::with('podezd')->get();
        return view('client.home',compact('doms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request);
        Client::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'phone_number' => $request->phone,
            'address' => $request->address,
            'apartment_id' => $request->apartment,

        ]);
        // 
        $doms = Dom::with('podezd')->get();
        return view('client.home',compact('doms'));
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
    public function dom(Request $request)
    {
        // dd($request);
        $dom = Dom::where('id', $request->dom_id)->first();
        // dd($dom);
        $podezds = Podezd::where('dom_id',$dom->id)->get();
        return view('client.dom',compact('dom','podezds'));
    }

    public function podezd(Request $request)
    {
        $podezd = Podezd::where('id', $request->podezd)->first();
        // dd($podezd);
        $floors = Floor::where('podezd_id', $podezd->id)->get();

        return view('client.podezd',compact('podezd','floors'));
    }

    public function floor(Request $request)
    {
        // dd($request);
        $floor = Floor::where('id', $request->floor)->first();
        
        return view('client.floor',compact('floor'));
    }

    public function shop(Request $request)
    {
        $apartment = Apartment::where('id',$request->id)->where('status',0)->first();
        // dd($apartment);
        return view('client.shop',compact('apartment'));
    }
}
