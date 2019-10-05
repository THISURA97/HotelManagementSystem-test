
@extends('layouts.app')
<title>Reports |</title>
@section('content')

    <div class="col-md-12" style="margin-top: 60px">

        <div class="col-md-6" style="margin-left:260px">
            <div class="jumbotron-fluid" style="backdrop-filter: blur(10px)" >
                <h3 style="margin-top: -20px">Reservation Report</h3>
                <form action="MonthlyO" method="get">
                    <table style="width:100%">
                        <tr>
                            <td>

                                <select class="form-control"  name="month" style="border-radius: 10px">
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </td>
                            <td>&nbsp;&nbsp;</td>
                            <td>

                                <select class="form-control" name="year" style="border-radius: 4px 10px 3px">
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                    <option>2024</option>

                                </select>




                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br>
                                <button class="btn btn-primary">Generate</button>
                            </td>
                            <td></td>
                            <td>

                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>



    </div>
@endsection























