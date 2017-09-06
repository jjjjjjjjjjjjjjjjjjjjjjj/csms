<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Item;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ItemController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $item = Item::all();

        return view('backEnd.admin.item.index', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required', 'body' => 'required', 'cat_id' => 'required', ]);

        Item::create($request->all());

        Session::flash('message', 'Item added!');
        Session::flash('status', 'success');

        return redirect('admin/item');
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
        $item = Item::findOrFail($id);

        return view('backEnd.admin.item.show', compact('item'));
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
        $item = Item::findOrFail($id);

        return view('backEnd.admin.item.edit', compact('item'));
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
        $this->validate($request, ['title' => 'required', 'body' => 'required', 'cat_id' => 'required', ]);

        $item = Item::findOrFail($id);
        $item->update($request->all());

        Session::flash('message', 'Item updated!');
        Session::flash('status', 'success');

        return redirect('admin/item');
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
        $item = Item::findOrFail($id);

        $item->delete();

        Session::flash('message', 'Item deleted!');
        Session::flash('status', 'success');

        return redirect('admin/item');
    }

}
