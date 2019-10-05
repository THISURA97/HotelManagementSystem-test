<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class eventPfdController extends Controller
{
    public function eventPdfview(Request $request)
    {
        $events = DB::table("events")->get();
        view()->share('events',$events);


        if($request->has('download')){
            $pdf = PDF::loadView('eventpdfview');
            return $pdf->download('eventpdfview.pdf');
        }


        return view('eventpdfview');
    }
}
