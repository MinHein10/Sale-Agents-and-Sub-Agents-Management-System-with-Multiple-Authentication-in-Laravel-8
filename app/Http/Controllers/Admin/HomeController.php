<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Agent;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware(['verified']);
    // }


    public function index()
    {
        $agentdata = DB::table('agents')->count();
        $admindata = DB::table('admins')->count();
        $adminall = Agent::all();

        $region1 = DB::table('agents')
                        ->where('township','Yangon')
                        ->get();

        $count1 = DB::table('agents')
                        ->where('township','=','Yangon')
                        ->get()
                        ->count();


        $region2 = DB::table('agents')->where('township','=','Mandalay')->get();
        $count2 = DB::table('agents')->where('township','=','Mandalay')->get()->count();

        return view('admin',compact(
            'admindata',
            'agentdata',
            'adminall',
            'region1',
            'region2',
            'count1',
            'count2')
        );
    }
    public function agent(){
        return view('agent');
    }

    public function home(){
        return view('home');
    }

    public function subagent(){
        return view('subagent');
    }

}
