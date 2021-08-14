<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubAgent;
use Illuminate\Support\Facades\Http;
use App\Models\Agent;
use Illuminate\Support\Facades\Hash;


class SubAgentController extends Controller
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
        $subagent = SubAgent::all();
        return view('subagent.index',compact('subagent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agent = Agent::all();
        $regions = Http::get('http://myancity.devsm.net/api/regions')->json();
        return view('subagent.add',compact('regions','agent'));
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
            "agent_id"=>"required",
            "region"=>"required",
            "township"=>"required",
            "phno"=>"required",
            "address"=>"required",
            "email"=>"required",
            "password"=>"required",
        ]);
        $sql = new SubAgent;
        $sql->name = $request->agentname;
        $sql->agent_id = $request->agent_id;
        $sql->township = $request->township;
        $sql->region = $request->region;
        $sql->phno = $request->phno;
        $sql->address = $request->address;
        $sql->email = $request->email;
        $sql->password = Hash::make($request->password);
        $sql->save();
        return redirect(route('managesubagent.index'));

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
        $updatesubagent = SubAgent::find($id);
        $updateagent = Agent::all();
        return view('subagent.update',compact('regions','updatesubagent','updateagent'));
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
            "agent_id"=>"required",
            "region"=>"required",
            "township"=>"required",
            "phno"=>"required",
            "address"=>"required",
            "email"=>"required",
        ]);

        $sql = SubAgent::find($id);
        $sql->name = $request->agentname;
        $sql->agent_id = $request->agent_id;
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
        SubAgent::where('id',$id)->delete();
        return redirect()->back();
    }
}
