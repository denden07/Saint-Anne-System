@extends("layouts.teacher")

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
                                        <th data-field="name" data-editable="true">Name</th>
                                        <th data-field="email" data-editable="true">Course</th>
                                        <th data-field="age" data-editable="true">Age</th>
                                        <th data-field="gender">Gender</th>
                                        <th data-field="address" data-editable="true">Address</th>
                                        <th data-field="phone" data-editable="true">Contact Number</th>
                                        <th data-field="date" data-editable="true">Date Enrolled</th>
                                        <th data-field="date">Updated</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td>10000</td>
                                        <td></td>
                                        <td>Marc Aldrin Dela Cruz</td>
                                        <td>Stem</td>
                                        <td>21</td>
                                        <td>M</td>
                                        <td>Brgy.3 Loing</td>
                                        <td>09300560720</td>
                                        <td>August 05, 2019</td>
                                        <td>3 days Ago</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>Tacko Fall</td>
                                        <td>Abm</td>
                                        <td>20</td>
                                        <td>M</td>
                                        <td>Brgy.18 Estancia</td>
                                        <td>09300723009</td>
                                        <td>August 07, 2019</td>
                                        <td>3 days Ago</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>Mamoudu Ndyaei</td>
                                        <td>Gas</td>
                                        <td>20</td>
                                        <td>M</td>
                                        <td>Brgy.17 Dupitac</td>
                                        <td>09400724009</td>
                                        <td>August 06, 2019</td>
                                        <td>3 days Ago</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>Maria Teresa Fatima Foronda</td>
                                        <td>Humss</td>
                                        <td>18</td>
                                        <td>F</td>
                                        <td>Brgy.4 Bimmanga</td>
                                        <td>09200544009</td>
                                        <td>August 05, 2019</td>
                                        <td>3 days Ago</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>Dj Alnas</td>
                                        <td>Gas</td>
                                        <td>19</td>
                                        <td>M</td>
                                        <td>Brgy.10 Arua-ay</td>
                                        <td>09200812008</td>
                                        <td>August 05, 2019</td>
                                        <td>3 days Ago</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>Arnel Dimaguiba</td>
                                        <td>Stem</td>
                                        <td>20</td>
                                        <td>M</td>
                                        <td>Brgy.16 Gayamat</td>
                                        <td>09300214006</td>
                                        <td>August 08, 2019</td>
                                        <td>3 days Ago</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>Badong Mureng</td>
                                        <td>Humss</td>
                                        <td>18</td>
                                        <td>M</td>
                                        <td>Brgy.10 Arua-ay</td>
                                        <td>09200812008</td>
                                        <td>August 05, 2019</td>
                                        <td>3 days Ago</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>Patricio Dimaculangan</td>
                                        <td>Abm</td>
                                        <td>17</td>
                                        <td>M</td>
                                        <td>Brgy.19 Abucay</td>
                                        <td>09555812309</td>
                                        <td>August 06, 2019</td>
                                        <td>3 days Ago</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>Badong Mureng</td>
                                        <td>Humss</td>
                                        <td>18</td>
                                        <td>M</td>
                                        <td>Brgy.10 Arua-ay</td>
                                        <td>09200812008</td>
                                        <td>August 05, 2019</td>
                                        <td>3 days Ago</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>Patrick Ewing</td>
                                        <td>Stem</td>
                                        <td>18</td>
                                        <td>M</td>
                                        <td>Brgy.10 Arua-ay</td>
                                        <td>09288397008</td>
                                        <td>August 06, 2019</td>
                                        <td>3 days Ago</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>Angel Joyce Maxwell</td>
                                        <td>Humss</td>
                                        <td>19</td>
                                        <td>F</td>
                                        <td>Brgy.22 Boy-Boy</td>
                                        <td>09200697428</td>
                                        <td>August 09, 2019</td>
                                        <td>3 days Ago</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>Magdalen Westbrook</td>
                                        <td>Stem</td>
                                        <td>19</td>
                                        <td>F</td>
                                        <td>Brgy.6 Tonoton</td>
                                        <td>096758797008</td>
                                        <td>August 06, 2019</td>
                                        <td>3 days Ago</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>Jenny Bebang</td>
                                        <td>Gas</td>
                                        <td>17</td>
                                        <td>M</td>
                                        <td>Brgy.14 MAruaya</td>
                                        <td>09097423591</td>
                                        <td>August 07, 2019</td>
                                        <td>3 days Ago</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>Mia Balagtas</td>
                                        <td>Stem</td>
                                        <td>20</td>
                                        <td>F</td>
                                        <td>Brgy.2 Anao</td>
                                        <td>09450074301</td>
                                        <td>August 06, 2019</td>
                                        <td>3 days Ago</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>Ding Angbato</td>
                                        <td>Gas</td>
                                        <td>18</td>
                                        <td>M</td>
                                        <td>Brgy.10 Arua-ay</td>
                                        <td>09334275619</td>
                                        <td>August 09, 2019</td>
                                        <td>3 days Ago</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>Patrick Ewing</td>
                                        <td>Stem</td>
                                        <td>18</td>
                                        <td>M</td>
                                        <td>Brgy.1 Cabaroan</td>
                                        <td>09367042415</td>
                                        <td>August 08, 2019</td>
                                        <td>3 days Ago</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>Michaela Grande</td>
                                        <td>Stem</td>
                                        <td>18</td>
                                        <td>F</td>
                                        <td>Brgy.20 Calluza</td>
                                        <td>09246591009</td>
                                        <td>August 06, 2019</td>
                                        <td>3 days Ago</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>Patrick Ewing</td>
                                        <td>Stem</td>
                                        <td>18</td>
                                        <td>M</td>
                                        <td>Brgy.10 Arua-ay</td>
                                        <td>09500741005</td>
                                        <td>August 06, 2019</td>
                                        <td>3 days Ago</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>Trisha Brooks</td>
                                        <td>Stem</td>
                                        <td>18</td>
                                        <td>M</td>
                                        <td>Brgy.10 Arua-ay</td>
                                        <td>09400532123</td>
                                        <td>August 07, 2019</td>
                                        <td>5 days Ago</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>Camille Ang</td>
                                        <td>Stem</td>
                                        <td>18</td>
                                        <td>F</td>
                                        <td>Brgy.10 Arua-ay</td>
                                        <td>09552839521</td>
                                        <td>August 10, 2019</td>
                                        <td>7 days Ago</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>Carlo Tugsheng</td>
                                        <td>Stem</td>
                                        <td>18</td>
                                        <td>M</td>
                                        <td>Brgy.5 Mangitayag</td>
                                        <td>0920283078</td>
                                        <td>August 07, 2019</td>
                                        <td>4 days Ago</td>
                                    </tr>
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