@extends('layouts.teacher')


@section('contents')
    <div class="container">


        <div class="panel panel-primary">
            <div class="panel-heading">MY Event Details</div>
            <div class="panel-body" >
                {!! $calendar_details->calendar() !!}
            </div>
        </div>

    </div>







@endsection

@section('scripts')
    <!--===============================================================================================-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>


    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

    {!! $calendar_details->script() !!}


@endsection