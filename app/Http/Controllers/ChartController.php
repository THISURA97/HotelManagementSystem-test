<?php

namespace App\Http\Controllers;

use App\expences;
use Illuminate\Http\Request;

use Carbon\Carbon;
use Charts;
use App\income;
use DB;


class ChartController extends Controller
{





    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function makeChart(){
        //$data = collect([]);
        $expences = array();
        $incomes = array();
        $profits = array();
        $date = array();

        $now = Carbon::now();
        for($i = 1; $i <=5; $i++) {
           // $data->push(DB::table('expences')->whereMonth('created_at', '=', Carbon::now()->subMonth(1))->count('expence_id'));
            $expences[$i-1] = DB::table('expences')->whereMonth('created_at', '=', Carbon::now()->subMonth($i))->sum('amount');
            $incomes[$i-1] = DB::table('incomes')->whereMonth('created_at', '=', Carbon::now()->subMonth($i))->sum('amount');
            $profits[$i-1] = $incomes[$i-1]-$expences[$i-1];
            $date[$i-1]= $now->subMonth(1)->format('M, Y');
           // echo $expences[$i-1];

        }

        //$expence = DB::table('expences')->whereMonth('created_at', '=', Carbon::now()->subMonth(1))->count();

        //$expences = expences::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        $incomes = income::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();

       // $profit = $incomes - $expences;


        /*$users = expences::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))
            ->get();*/

                $chart = Charts::create('bar', 'highcharts')
                    ->title("Last 5 Months Profit")
                    ->labels([$date[0],$date[1],$date[2],$date[3],$date[4]])

                    ->elementLabel("Total Profit")
                   ->values([$profits[0],$profits[1],$profits[2],$profits[3],$profits[4]])
                    ->dimensions(0, 400)
                    ->responsive(true);
                   // ->groupByMonth(date('Y'), true);






        return view('pages.chartFinance', compact('chart'));

    }


}
