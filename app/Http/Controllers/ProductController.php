<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $products = Product::join('categories', 'products.category_id', '=', 'categories.id')
//            ->select('products.*', 'categories.category_name')
//            ->get();
//
//        $categories = Category::all();

        return view('admin.product.manage-product', [
            'products' => Product::orderBy('created_at', 'desc')->get(),
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.add-product',
        [
            'categories'=>Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'category'=> 'required',
//            'title'=>'required|string|min:5|max:50',
//            'image'=>'required',
//            'description'=>'required|string|min:10|max:500',
//            'blog_type'=>'required',
//            'date'=>'required|date'
//        ]);

        try {
            Product::saveProduct($request);

            return back()->with('message', 'Added Successfully');
        } catch (\Exception $e) {
            return back()->with('message', 'Failed to add. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.product.edit-product',[
            'product' => Product::find($id),
            'categories'=>Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        try {
            Product::updateProduct($request,$id);

            return redirect('products')->with('message', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect('products')->with('message', 'Failed to Update. Please try again.');
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if($product->image){
            if(file_exists($product->image)){
                unlink($product->image);
            }
        }
        $product->delete();
        return back();
    }

}
