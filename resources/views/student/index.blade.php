@extends("layouts.student")

@section('title')
  Student  DASHBOARD
@endsection
@section('userpicture')
    {{$users->studentphotos->file}}
@endsection
@section('username')
    {{$users->studentFirstName." ". $users->studentMiddleName." ".$users->studentLastName." ".$users->studentExtensionName}}
@endsection



@section('header')
    DASHBOARD
@endsection

