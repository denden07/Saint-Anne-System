@extends("layouts.admin")

@section('title')
   All Students
@endsection


@section('is_active_students')
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
                        <h1>Students List</h1>
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
                              <th data-field="email" data-editable="false">Course</th>
                              <th data-field="age" data-editable="false">Age</th>
                              <th data-field="gender">Gender</th>
                              <th data-field="address" data-editable="false">Address</th>
                              <th data-field="phone" data-editable="false">Contact Number</th>
                              <th data-field="date" data-editable="false">Date Enrolled</th>
                              <th data-field="date">Updated</th>
                           </tr>
                           </thead>
                           <tbody>

                              @if($students)
                                 @foreach($students as$student)
                                    <tr>
                              <td></td>
                              <td>{{$student->id}}</td>
                              <td><img height="30" src="{{$student->studentphotos ? $student->studentphotos->file:'User has no Photo'}}"></td>
                              <td><a href="#">{{$student->studentFirstName ." ". $student->studentMiddleName. " ".$student->studentLastName ." ".$student->studentExtensionName}}</a></td>
                              <td>{{$student->studentdepartment->deptName}}</td>
                              <td>{{$student->studentAge}}</td>
                              <td>{{$student->studentgender->name}}</td>
                              <td>{{$student->studentHouseNo." ". $student->studentBarangay." ".$student->studentMunicipality." ".$student->studentZipcode}}</td>
                              <td>{{$student->studentContactNo}}</td>
                             <td>{{$student->created_at->format('M d Y')}}</td>
                              <td>{{$student->updated_at->format('M d Y')}}</td>
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