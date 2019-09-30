<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Validator;
use  MaddHatter\LaravelFullcalendar\Facades\Calendar;



class EventsController extends Controller
{
    //
    public function index(){
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

        return view('admin.event.create',compact('calendar_details'));
    }



    public function addEvent(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'event_name' =>'required',
            'start_date' =>'required',
            'end_date' =>'required'
    ]);

        if($validator->fails()){
          Session::flash('Warning','Please enter Valid Details');
          return Redirect::to('/events')->withInput()->withErrors($validator);
        }

        $event = new Event;
        $event->event_name = $request['event_name'];
        $event->start_date = $request['start_date'];
        $event->end_date = $request['end_date'];
        $event->save();

        Session::flash('success','Event Added Succesfully');

        return Redirect::to('/events');


    }

    public function index2(){
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

        return view('teacher.calendar.events',compact('calendar_details'));
    }


}
