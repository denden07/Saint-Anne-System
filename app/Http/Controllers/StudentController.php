<?php

namespace App\Http\Controllers;

use App\Event;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  MaddHatter\LaravelFullcalendar\Facades\Calendar;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $guard = 'student';
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $users =Auth::guard('student')->user();
        return view('student.index',compact('users'));
    }

    public function index20(){
        $events = Event::get();
        $event_list = [];

        foreach ($events as $key=>$event){
            $event_list[] = Calendar::event(
                $event->event_name,
                true,
                new \DateTime($event->start_date),
                new \DateTime($event->end_date.'+1 day')
            );
        }

        $calendar_details = Calendar::addEvents($event_list);

        return view('student.event.events',compact('calendar_details'));
    }
}
