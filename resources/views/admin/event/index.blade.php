@extends("layouts.admin")

@section('title')
    Library
@endsection


@section('is_active_events')
    class="active"
@endsection


@section('contents')
    <div class="calender-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="calender-inner">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection