<?php

namespace App\Http\Controllers;

use App\department;
use App\Shift;
use Illuminate\Http\Request;
use App\staff;
use Auth;
use Illuminate\support\facades\file;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   public function __construct()
    {
        $this->middleware(['auth', 'isStaff']);
    }

    public function index()

    {
         $staff = staff::all();

        return view('staff.index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

       // $shift = Shift::get();
        $department = department::get();

        return view('staff.create', ['department' => $department]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'sap_no' => 'required|min:8|max:8',
            'name' => 'required',
            'department_id' => 'required',
            'gender' => 'required',
            'image' => 'required|mimes:jpeg,png|max:2048'
        ]);
        $image = "";

        if ($request->hasFile('image')) {
            $destinationPath = "staff images";
            $file = $request->image;
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename);
            $image = $filename;
        }
        $sap_no = $request->sap_no;
        $check = staff::where('sap_no', '=', $sap_no)->first();

        if ($check == NULL ) {

            $staff = new staff();
            $staff->sap_no = $request->sap_no;
            $staff->name = $request->name;
            $staff->department_id = $request->department_id;
            $staff->gender = $request->gender;
            $staff->image = $image;

            $staff->save();


            flash()->success('Staff created successfully');
            return redirect(url('/staff'));


        } else

            {

                abort('400');
        }

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
    public function edit( staff $staff)
    {

        //$staff = staff::findOrFail($id);
        //$staff_shift = $staff->shift->id;
        $staff_department = $staff->department->id;
      //  $shifts = Shift::where('id', '!=', $staff_shift)->get();
        $departments = department::where('id', '!=', $staff_department)->get();


        return view('staff.edit',compact('staff','departments','staff_department') );


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, staff $staff)
    {
      //  $staff = Staff::findOrFail($id);


        $staff->update($request->all());

        flash()->success('Staff updated successfully');

        return redirect()->route('staff.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(staff $staff)
    {
        
         $staff->delete();
      $image_path = 'staff images/'.$staff->image;
      if(File::exists($image_path)){

          File::delete($image_path);

      }

      flash()->success('Staff deleted successfully');
     return redirect()->route('staff.index');
    }

}
