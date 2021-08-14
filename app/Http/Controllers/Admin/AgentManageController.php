<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agent;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class AgentManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agent = Agent::all();
        return view('agent.index',compact('agent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('agent.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "agentname"=>"required",
            "region"=>"required",
            "township"=>"required",
            "phno"=>"required",
            "address"=>"required",
            "email"=>"required",
            "password"=>"required",
        ]);
        $sql = new Agent;
        $sql->name = $request->agentname;
        $sql->township = $request->township;
        $sql->region = $request->region;
        $sql->phno = $request->phno;
        $sql->address = $request->address;
        $sql->email = $request->email;
        $sql->password = Hash::make($request->password);
        $sql->save();
        return redirect(route('manageagent.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $regions = Http::get('http://myancity.devsm.net/api/regions')->json();
        $updateagent = Agent::find($id);
        return view('agent.update',compact('updateagent','regions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            "agentname"=>"required",
            "region"=>"required",
            "township"=>"required",
            "phno"=>"required",
            "address"=>"required",
            "email"=>"required",
        ]);

        $sql = Agent::find($id);
        $sql->name = $request->agentname;
        $sql->region = $request->region;
        $sql->township = $request->township;
        $sql->phno = $request->phno;
        $sql->address = $request->address;
        $sql->email = $request->email;
        $sql->save();
        return redirect(route('manageagent.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Agent::where('id',$id)->delete();
        return redirect()->back();
    }
}
