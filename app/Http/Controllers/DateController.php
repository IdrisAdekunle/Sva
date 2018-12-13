<?php

namespace App\Http\Controllers;

use App\date;
use App\ShiftSchedule;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\department;



class DateController extends Controller
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

    public function CreateNewMonthDatesIndex()
    {

        $departments = department::get();

        return view('ShiftSchedule.CreateNewMonthDates', ['departments' => $departments]);
    }

    public function CreateNewMonthDates(Request $request)
    {

        $new_m = carbon::now()->month;
        $new_y = carbon::now()->year;
        $new_w = Carbon::createFromDate($new_y, $new_m);;
        $department = $request->department;
        if ($new_w->weekOfMonth == 1) {


            date::where('department_id', '=', $department)->delete();
            $m = carbon::now()->month;
            $y = carbon::now()->year;
            $month = Carbon::createFromDate($y, $m);
            for ($i = 1; $i <= $month->daysInMonth; $i++) {
                $new = new date();
                $new->year = $y;
                $new->month = $m;
                $new->day = $i;
                $new->date = $y . '-' . $m . '-' . $i;
                $new->department_id = $request->department;
                $new->save();
            }
            flash()->success('New dates created successfully');
            return back();

        } elseif ($new_w->weekOfMonth > 1) {


            abort('404');



        }



        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

}
