@extends("layouts.admin")

@section('title')
    All Teacher
@endsection


@section('is_active_teacher')
    class="active"
@endsection


@section('contents')


    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Teachers List</h1>
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
                                        <th data-field="name" data-editable="true">Name</th>
                                        <th data-field="email" data-editable="true">Role</th>
                                        <th data-field="age" data-editable="true">Age</th>
                                        <th data-field="department">Department</th>
                                        <th data-field="gender">Gender</th>
                                        <th data-field="address" data-editable="true">Address</th>
                                        <th data-field="phone" data-editable="true">Contact Number</th>
                                        <th data-field="date" data-editable="true">Date Joined</th>
                                        <th data-field="date">Updated</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($teachers)
                                        @foreach($teachers as$teacher)
                                    <tr>
                                        <td></td>
                                        <td>{{$teacher->id}}</td>
                                        <td><img height="30" src="{{$teacher->teacherphotos ? $teacher->teacherphotos->file:'User has no Photo'}}"></td>
                                        <td>{{$teacher->teacherFirstName ." ". $teacher->teacherMiddleName. " ".$teacher->teacherLastName . " ".$teacher->teacherExtensionName}}</td>
                                        <td>{{$teacher->teacherEmail}}</td>
                                        <td>{{$teacher->teacherAge}}</td>
                                        <td>{{$teacher->departments->deptName}}</td>
                                        <td>{{$teacher->genders->name}}</td>
                                        <td>{{$teacher->teacherHouseNo." ". $teacher->teacherBarangay." ".$teacher->teacherMunicipality." ".$teacher->teacherZipcode}}</td>
                                        <td>{{$teacher->teacherContactNo}}</td>
                                        <td>{{$teacher->created_at->diffForHumans()}}</td>
                                        <td>{{$teacher->updated_at->diffForHumans()}}</td>
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