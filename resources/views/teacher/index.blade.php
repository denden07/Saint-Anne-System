@extends("layouts.teacher")

@section('title')
    DASHBOARD
@endsection
@section('userpicture')
    {{$users->teacherphotos->file}}
    @endsection
@section('username')
    {{$users->teacherFirstName." ". $users->teacherMiddleName." ".$users->teacherLastName." ".$users->teacherExtensionName}}
@endsection



@section('header')
    DASHBOARD
@endsection

