<?php

namespace App\Http\Controllers;

use App\department;
use Illuminate\Http\Request;
use App\staff;
use App\Shift;
use App\User;
use App\ShiftSchedule;
use Carbon\Carbon;
use App\date;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dates = date::all()->count();
       // $schedule = ShiftSchedule::all()->count();

        if ($dates  > 100) {

            $today_shifts = carbon::now()->day;
            $staff = staff::all()->count();
            $shifts = Shift::all()->count();
            $users = User::all()->count();
            $departments = department::all()->count();
            $om_date = date::where('department_id', '=', 1)->where('day', '=', $today_shifts)->pluck('id');
            $ff_date = date::where('department_id', '=', 2)->where('day', '=', $today_shifts)->pluck('id');
            $cm_date = date::where('department_id', '=', 3)->where('day', '=', $today_shifts)->pluck('id');
            $fm_date = date::where('department_id', '=', 4)->where('day', '=', $today_shifts)->pluck('id');
            $fm2_date = date::where('department_id', '=', 5)->where('day', '=', $today_shifts)->pluck('id');
            $oil_mill_m = ShiftSchedule::where('department_id', '=', '1')->where('shift_id', '=', '1')->where('date_id', '=', $om_date)->count();
            $oil_mill_a = ShiftSchedule::where('department_id', '=', '1')->where('shift_id', '=', '2')->where('date_id', '=', $om_date)->count();
            $oil_mill_n = ShiftSchedule::where('department_id', '=', '1')->where('shift_id', '=', '3')->where('date_id', '=', $om_date)->count();
            $fish_feed_m = ShiftSchedule::where('department_id', '=', '2')->where('shift_id', '=', '1')->where('date_id', '=', $ff_date)->count();
            $fish_feed_a = ShiftSchedule::where('department_id', '=', '2')->where('shift_id', '=', '2')->where('date_id', '=', $ff_date)->count();
            $fish_feed_n = ShiftSchedule::where('department_id', '=', '2')->where('shift_id', '=', '3')->where('date_id', '=', $ff_date)->count();
            $cereal_mill_m = ShiftSchedule::where('department_id', '=', '3')->where('shift_id', '=', '1')->where('date_id', '=', $cm_date)->count();
            $cereal_mill_a = ShiftSchedule::where('department_id', '=', '3')->where('shift_id', '=', '2')->where('date_id', '=', $cm_date)->count();
            $cereal_mill_n = ShiftSchedule::where('department_id', '=', '3')->where('shift_id', '=', '3')->where('date_id', '=', $cm_date)->count();
            $feed_mill_1_m = ShiftSchedule::where('department_id', '=', '4')->where('shift_id', '=', '1')->where('date_id', '=', $fm_date)->count();
            $feed_mill_1_a = ShiftSchedule::where('department_id', '=', '4')->where('shift_id', '=', '2')->where('date_id', '=', $fm_date)->count();
            $feed_mill_1_n = ShiftSchedule::where('department_id', '=', '4')->where('shift_id', '=', '3')->where('date_id', '=', $fm_date)->count();
            $feed_mill_2_m = ShiftSchedule::where('department_id', '=', '5')->where('shift_id', '=', '1')->where('date_id', '=', $fm2_date)->count();
            $feed_mill_2_a = ShiftSchedule::where('department_id', '=', '5')->where('shift_id', '=', '2')->where('date_id', '=', $fm2_date)->count();
            $feed_mill_2_n = ShiftSchedule::where('department_id', '=', '5')->where('shift_id', '=', '3')->where('date_id', '=', $fm2_date)->count();

            return view('dashboard2', compact(
                'users', 'staff', 'shifts', 'departments',
                'oil_mill_m', 'oil_mill_a', 'oil_mill_n',
                'fish_feed_m', 'fish_feed_a', 'fish_feed_n',
                'cereal_mill_m', 'cereal_mill_a', 'cereal_mill_n',
                'feed_mill_1_m', 'feed_mill_1_a', 'feed_mill_1_n',
                'feed_mill_2_m', 'feed_mill_2_a', 'feed_mill_2_n'
            ));

        }
             else{

                 $staff = staff::all()->count();
                 $shifts = Shift::all()->count();
                 $users = User::all()->count();
                 $departments = department::all()->count();

                 //return dd($dates);
                 return view('dashboard', compact(
                     'users', 'staff', 'shifts', 'departments'
                 ));
             }
        }


}
