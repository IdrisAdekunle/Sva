<?php

namespace App\Http\Controllers;

use App\Shift;
use Illuminate\Http\Request;
use Auth;


class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
   {
        $this->middleware(['auth', 'isShift']);
    }

    public function index()
    {
        $shifts = Shift::all();
        return view('shift.index', compact('shifts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shift.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required']);
        $shift = new shift();
        $shift->name=$request->name;
        $shift->save();

        flash()->success('Shift created successfully');
        return redirect(url('/shift'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
       $this->validate($request, ['name' => 'required']);

        $shift = Shift::findOrFail($id);


        $shift->update($request->all());

        flash()->success('Shift updated successfully');

        return redirect()->route('shift.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Shift::find($id)->delete();

        flash()->success('Shift deleted successfully');

        return redirect()->route('shift.index');
    }
}
