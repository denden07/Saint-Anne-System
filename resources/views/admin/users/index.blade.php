@extends("layouts.admin")

@section('title')
    View Users
@endsection

@section('is_active_user')
    class="active"
@endsection

@section('userphoto')
    {{$users_auth ->photos->file}}
@endsection
@section('username')
    {{$users_auth ->firstName." ". $users_auth ->middleName." ".$users_auth ->lastName." ".$users_auth ->nameExtension}}
@endsection

@section('contents')


    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Users List</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <select class="form-control dt-tb">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                       data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">ID</th>
                                        <th data-field="photo">Photo</th>
                                        <th data-field="name" data-editable="false">Name</th>
                                        <th data-field="email" data-editable="true">Role</th>
                                        <th data-field="age" data-editable="true">Age</th>
                                        <th data-field="gender">Gender</th>
                                        <th data-field="address" data-editable="true">Address</th>
                                        <th data-field="phone" data-editable="true">Contact Number</th>
                                        <th data-field="date" data-editable="true">Date Enrolled</th>
                                        <th data-field="date">Updated</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($users)
                                        @foreach($users as $user)

                                    <tr>
                                        <td></td>
                                        <td>{{$user->id}}</td>
                                        <td><img height="30" src="{{$user->photos ? $user->photos->file:'User has no Photo'}}"></td>
                                        <td><a href="#" style="display: block">{{$user->firstName . $user->middleName . " ".$user->lastName . " ".$user->nameExtension}}</a> </td>
                                        <td>{{$user->roles ? $user->roles->name:'User has no role'}}</td>
                                        <td>{{$user->age}}</td>
                                        <td>{{$user->genders->name}}</td>
                                        <td>{{$user->houseNo." ". $user->barnagay." ".$user->municipality." ".$user->zipCode}}</td>
                                        <td>{{$user->mobileNo}}</td>
                                        <td>{{$user->created_at->format('M d Y')}}</td>
                                        <td>{{$user->updated_at->format('M d Y')}}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection



