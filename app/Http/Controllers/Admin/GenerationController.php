<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Generation;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class GenerationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $generation = Generation::all();

        return view('backEnd.admin.generation.index', compact('generation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.generation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required', ]);

        Generation::create($request->all());

        Session::flash('message', 'Generation added!');
        Session::flash('status', 'success');

        return redirect('admin/generation');
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
        $generation = Generation::findOrFail($id);

        return view('backEnd.admin.generation.show', compact('generation'));
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
        $generation = Generation::findOrFail($id);

        return view('backEnd.admin.generation.edit', compact('generation'));
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
        $this->validate($request, ['title' => 'required', ]);

        $generation = Generation::findOrFail($id);
        $generation->update($request->all());

        Session::flash('message', 'Generation updated!');
        Session::flash('status', 'success');

        return redirect('admin/generation');
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
        $generation = Generation::findOrFail($id);

        $generation->delete();

        Session::flash('message', 'Generation deleted!');
        Session::flash('status', 'success');

        return redirect('admin/generation');
    }

}
