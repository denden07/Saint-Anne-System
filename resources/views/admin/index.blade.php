@extends("layouts.admin")

@section('title')
    DASHBOARD
@endsection
@section('userphoto')
{{$users->photos->file}}
@endsection
@section('username')
    {{$users->firstName." ". $users->middleName." ".$users->lastName." ".$users->nameExtension}}
@endsection


@section('header')
    DASHBOARD
@endsection
