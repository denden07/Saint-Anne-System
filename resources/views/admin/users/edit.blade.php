@extends("layouts.admin")

@section('title')
    View Users
@endsection

@section('userphoto')
    {{$users_auth ->photos->file}}
@endsection
@section('username')
    {{$users_auth ->firstName." ". $users_auth ->middleName." ".$users_auth ->lastName." ".$users_auth ->nameExtension}}
@endsection


@section('header')
    All Users
@endsection