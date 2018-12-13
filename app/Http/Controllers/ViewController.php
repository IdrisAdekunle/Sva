<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\staff;
use Psr\Log\NullLogger;
use App\Log;
use App\ShiftSchedule;
use Auth;
use Carbon\Carbon;
use App\date;


class ViewController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'isView']);
    }


    public function index()
    {

        return view('view.index');


    }

    public function view(Request $request)
    {

        $this->validate($request, ['sap_no' => 'required']);

        $staff = $request->sap_no;
        $staff_no = staff::where('sap_no', '=', $staff)->first();
        $today = carbon::now()->day;




        if($staff_no == Null ){

            abort('307');

        }
      else {

          $date = date::where('department_id','=',$staff_no->department_id)->where('day','=',$today)->pluck('id');
          $staff_details = ShiftSchedule::where('date_id', '=', $date)->where('staff_id', '=', $staff_no->id)->first();
      }

      if ($staff_details == Null) {

           abort('501');

      } else {

             $log = new log();
               $log->sap_no = $staff_details->staff->sap_no;
             $log->name = $staff_details->staff->name;
            $log->department = $staff_details->department->name;
             $log->shift = $staff_details->shift->name;
             $log->viewed_by = Auth::user()->name;
              $log->save();

          return view('view.view', compact('staff_details'));

        }


    }

}







