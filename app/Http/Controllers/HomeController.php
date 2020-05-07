<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Family;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function test(){

        $text2= "REPLACE(group_concat(family_id_array),'[','')";
        $family_ids = Donation::where(['donation_area_id'=>1,'org_id'=>1])
            ->select(DB::raw("REPLACE(".$text2.",']','') as ttt"))
            ->where('created_at','<',Carbon::now()->addDays(-6))
            ->groupBy('donation_area_id')
            ->first();
//        dd(explode(',',$family_ids['ttt']));
        $family =Family::where(['donation_area_id'=>1])
            ->whereIn('id',explode(',',$family_ids['ttt']))
            ->get();
        dd($family);
    }
}
