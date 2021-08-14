<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AgentOrder;
use Illuminate\Support\Facades\Validator;


class AgentOrderAPIController1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agentsorders = AgentOrder::all();
        return response()->json(["success"=>true,"message"=>"Agents Orders List","data"=>$agentsorders]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_code'=>'required',
            'agent_id' => 'required',
            'product_id' => 'required',
            'quantity'=>'required',
            'is_package'=>'required',
            'payment_methods'=>'required',
            'is_success'=>'required',
        ]);


        if($validator->fails()){
            return response()->json(["message"=>"Agents Orders created not successfully!"]);
        }

        $sql = new AgentOrder;
        $sql->order_code = $request->order_code;
        $sql->agent_id = $request->agent_id;
        $sql->product_id = $request->product_id;
        $sql->quantity = $request->quantity;
        $sql->is_package = $request->is_package;
        $sql->package_id = $request->package_id;
        $sql->payment_methods = $request->payment_methods;
        $sql->payment_slip_images = $request->payment_slip_images;
        $sql->is_success = $request->is_success;
        $sql->save();

        return response()->json([
        "success" => true,
        "message" => "Agents Orders created successfully!",
        "data" => $sql
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agentOrder = AgentOrder::find($id);
        if (is_null($agentOrder)) {
            return response()->json(["message"=>"Agents Orders not found!"]);
            }
            return response()->json([
            "success" => true,
            "message" => "Agents Orders retrieved successfully.",
            "data" => $agentOrder,
            200
            ]);
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
        $validator = Validator::make($request->all(), [
            'order_code'=>'required',
            'agent_id' => 'required',
            'product_id' => 'required',
            'quantity'=>'required',
            'is_package'=>'required',
            'payment_methods'=>'required',
            'is_success'=>'required',
        ]);

        if($validator->fails()){
            return response()->json(["message"=>"Agents Orders updated not successfully!"]);
        }

        $agentsorders = AgentOrder::findOrFail($id);
        $agentsorders->update([
            'order_code' => $request->order_code,
            'agent_id' => $request->agent_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'is_package' => $request->is_package,
            'package_id' => $request->package_id,
            'payment_methods' => $request->payment_methods,
            'payment_slip_images' => $request->payment_slip_images,
            'is_success' => $request->is_success,
        ]);

        return response()->json([
            "success" => true,
            "message" => "Agents Orders updated successfully!",
            "data" => $agentsorders
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agentsorders = AgentOrder::findOrFail($id);
        $agentsorders->delete();
        return response()->json([
        "success" => true,
        "message" => "Agent Orders deleted successfully.",200
        ]);
    }
}
