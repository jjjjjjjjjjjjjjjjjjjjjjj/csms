<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Country;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class CountryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $country = Country::all();

        return view('backEnd.admin.country.index', compact('country'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', ]);

        Country::create($request->all());

        Session::flash('message', 'Country added!');
        Session::flash('status', 'success');

        return redirect('admin/country');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $country = Country::findOrFail($id);

        return view('backEnd.admin.country.show', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $country = Country::findOrFail($id);

        return view('backEnd.admin.country.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['name' => 'required', ]);

        $country = Country::findOrFail($id);
        $country->update($request->all());

        Session::flash('message', 'Country updated!');
        Session::flash('status', 'success');

        return redirect('admin/country');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $country = Country::findOrFail($id);

        $country->delete();

        Session::flash('message', 'Country deleted!');
        Session::flash('status', 'success');

        return redirect('admin/country');
    }

}
