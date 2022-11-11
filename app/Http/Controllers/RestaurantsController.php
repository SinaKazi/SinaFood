<?php

namespace App\Http\Controllers;

use App\Models\Restaurants;
use App\Models\User;
use Illuminate\Http\Request;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $restaurants = Restaurants::query()->paginate(20);
        return View('panel.restaurants' , compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Restaurants::create([
            'name'=> request('name'),
            'phone_number'=> request('phone_number'),
            'address'=> request('address'),
            'lat'=> request('lat'),
            'lng'=> request('lng'),
            'account_number'=> request('account_number'),
            'type_restayrant'=> request('type_restayrant'),
            'url_img'=> request('url_img'),
            'time'=> request('time')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $restVaid = $request->validate([
            'name'=> 'required|max:255|',
            'phone_number'=> 'required|max:11|',
            'address'=>'required|max:255|',
            'lat'=>'required',
            'lng'=>'required',
            'account_number'=>'required|digits:12',
            'type_rest'=>'required',
            'url_img'=>'url',
            'time'=>'required'
        ]);

        Restaurants::created($restVaid);

        return redirect(route('dashboard.restaurants'))->with('success','رستوران با موفقیت اضافه شد');

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
