
@extends('layouts.master')
<title>Reports |</title>
@section('content')

    <div class="col-md-12" style="margin-top: 60px">

        <div class="col-md-6" style="margin-left:260px">
            <div class="jumbotron"  >
                <h3 style="margin-top: -20px">Online Reservation Monthy Report</h3>
                <form action="gen-monthly-online" method="get">
                    <table style="width:100%">
                        <tr>
                            <td>

                                <select class="form-control"  name="month" style="border-radius: 4px 10px 3px">
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
                                <button class="btn btn-success">Generate Report</button>
                            </td>
                            <td></td>
                            <td>

                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>



    <div class="col-md-12" style="margin-top: 90px">
        <p style="text-align: center; font-size:50px">Financial Department - Refresh Hikkaduwa</p>
    </div>
@endsection























