<?php

namespace App\Http\Controllers;

use App\ShiftSchedule;
use Illuminate\Http\Request;
use App\Shift;
use App\staff;
use App\department;
use Carbon\Carbon;
use App\date;


class ShiftScheduleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth','isSchedule']);
    }

    public function index()
    {

        $departments = department::get();

        return view('ShiftSchedule.index',['departments' => $departments]);



    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function ShowUploadView(Request $request)
    {
        $department = $request->department;
       // $departments = department::where('id','=',$department)->pluck('id');
        $shift_schedule = ShiftSchedule::pluck('date_id')->all();
        $dates = date::where('department_id','=',$department)->whereNotIn('id',$shift_schedule)->get();
        $staff_m = staff::where('department_id','=',$department)->get();
        $staff_a = staff::where('department_id','=',$department)->get();
        $staff_n = staff::where('department_id','=',$department)->get();
        $shift_1 = Shift::get();
        $shift_2 =Shift::get();
        $shift_3 =Shift::get();

     //return dd($dates);


        return view('ShiftSchedule.upload', ['staff_m'=>$staff_m,'dates' => $dates,'department' => $department,
            'staff_a' => $staff_a, 'staff_n' => $staff_n,
            'shift_1' => $shift_1,'shift_2' => $shift_2, 'shift_3' => $shift_3

        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $this->validate($request,[
            'date' => 'required',
            'staff_m' => 'required',
            'staff_a' => 'required',
            'staff_n' => 'required',
             'shift_1' => 'required',
              'shift_2' => 'required',
              'shift_3' => 'required'
        ]);

            for ($m = 0; $m <count($request->staff_m); $m++) {
                $ShiftSchedule = new ShiftSchedule();
                $ShiftSchedule->staff_id = $request->staff_m[$m];
                $ShiftSchedule->shift_id = $request->shift_1;
                $ShiftSchedule->department_id = $request->department;
                $ShiftSchedule->date_id = $request->date;
                $ShiftSchedule->save();
            }
            for ($a = 0; $a <count($request->staff_a); $a++) {
                $ShiftSchedule = new ShiftSchedule();
                $ShiftSchedule->staff_id = $request->staff_a[$a];
                $ShiftSchedule->shift_id = $request->shift_2;
                $ShiftSchedule->department_id = $request->department;
                $ShiftSchedule->date_id = $request->date;
                $ShiftSchedule->save();
            }
             for ($n = 0; $n <count($request->staff_n); $n++) {
                $ShiftSchedule = new ShiftSchedule();
                $ShiftSchedule->staff_id = $request->staff_n[$n];
                $ShiftSchedule->shift_id = $request->shift_3;
                $ShiftSchedule->department_id = $request->department;
                $ShiftSchedule->date_id = $request->date;
                $ShiftSchedule->save();
            }

        flash()->success('Schedule created successfully');
        return redirect('/ShiftSchedule');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShiftSchedule  $shiftSchedule
     * @return \Illuminate\Http\Response
     */
Public function ChangeStaffSchedule(Request $request){

  $month = carbon::now()->month;

  $dates = date::where('month','=',$month)->pluck('id')->all();
    $shiftSchedule = ShiftSchedule::whereIn('date_id',$dates)->get();


    return view('ShiftSchedule.change staff schedule',compact('shiftSchedule'));

}

public function Edit($id){

    $schedule = ShiftSchedule::FindOrFail($id);
    $staff_shift = $schedule->shift->id;
    $shift = Shift::where('id','!=',$staff_shift)->get();


    return view ('ShiftSchedule.edit',compact('schedule','shift','staff_shift'));



}
public function Update(Request $request,$id){

    $schedule = ShiftSchedule::FindOrFail($id);

   $schedule->update($request->only('shift_id'));



    flash()->success('Staff schedule changed successfully');

    return redirect('/ShiftSchedule/ChangeStaffSchedule');

}

}
