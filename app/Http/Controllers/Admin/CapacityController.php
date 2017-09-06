<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Capacity;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class CapacityController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $capacity = Capacity::all();

        return view('backEnd.admin.capacity.index', compact('capacity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.capacity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required', 'cat_id' => 'required', ]);

        Capacity::create($request->all());

        Session::flash('message', 'Capacity added!');
        Session::flash('status', 'success');

        return redirect('admin/capacity');
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
        $capacity = Capacity::findOrFail($id);

        return view('backEnd.admin.capacity.show', compact('capacity'));
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
        $capacity = Capacity::findOrFail($id);

        return view('backEnd.admin.capacity.edit', compact('capacity'));
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
        $this->validate($request, ['title' => 'required', 'cat_id' => 'required', ]);

        $capacity = Capacity::findOrFail($id);
        $capacity->update($request->all());

        Session::flash('message', 'Capacity updated!');
        Session::flash('status', 'success');

        return redirect('admin/capacity');
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
        $capacity = Capacity::findOrFail($id);

        $capacity->delete();

        Session::flash('message', 'Capacity deleted!');
        Session::flash('status', 'success');

        return redirect('admin/capacity');
    }

}
