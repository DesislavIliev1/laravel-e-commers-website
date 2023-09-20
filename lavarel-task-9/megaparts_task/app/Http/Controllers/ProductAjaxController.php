<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Yajra\DataTables\DataTables;

class ProductAjaxController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
  
            $data = Product::latest()->get();
  
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('admin.view_product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::updateOrCreate([
                'id' => $request->product_id
            ],
            [
                'name' => $request->name, 
                'description' => $request->description,
                'price' => $request->price,
                'image' => $request->image,
            ]);        

        return response()->json(['success'=>'Product saved successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
      
        return response()->json(['success'=>'Product deleted successfully.']);
    }
}
