<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
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
        $data = Product::paginate(5);
        return view('products.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
              $this->validate($request, [
                'productname'=>'required',
                'category'=>'required',
                'files' => 'required',
                'details'=>'required',
                'prices'=>'required',
                ]);
                $files = [];
                if($request->hasfile('files'))
                {
                   foreach($request->file('files') as $file)
                   {
                        $name = time().".".$file->getClientOriginalName();;
                        $file->move('public/images/',$name);
                        $files[] = $name;
                   }
                }
                        $sql = new Product;
                        $sql->productname = $request->productname;
                        $sql->category_id = $request->category;
                        $sql->instock = $request->instock;
                        $sql->images = json_encode($files);
                        $sql->description = $request->details;
                        $sql->prices = $request->prices;
                        $sql->save();
                        return redirect()->route('product.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id',$id)->delete();
        return redirect()->back();
    }
}
