<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\quotation;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class QuotationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $quotation = quotation::all();

        return view('backEnd.admin.quotation.index', compact('quotation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.quotation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        quotation::create($request->all());

        Session::flash('message', 'quotation added!');
        Session::flash('status', 'success');

        return redirect('admin/quotation');
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
        $quotation = quotation::findOrFail($id);

        return view('backEnd.admin.quotation.show', compact('quotation'));
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
        $quotation = quotation::findOrFail($id);

        return view('backEnd.admin.quotation.edit', compact('quotation'));
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
        
        $quotation = quotation::findOrFail($id);
        $quotation->update($request->all());

        Session::flash('message', 'quotation updated!');
        Session::flash('status', 'success');

        return redirect('admin/quotation');
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
        $quotation = quotation::findOrFail($id);

        $quotation->delete();

        Session::flash('message', 'quotation deleted!');
        Session::flash('status', 'success');

        return redirect('admin/quotation');
    }

}
