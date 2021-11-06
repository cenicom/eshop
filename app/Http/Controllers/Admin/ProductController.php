<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    //
    public function index()
    {
        # code...
        $products = Product::all();

        return view('admin.product.index', compact('products'));
    }

    public function add()
    {
        # code...
        $categories = Category::all();

        return view('admin.product.add', compact('categories'));
    }

    public function insert(Request $request)
    {
        # code...
        $products = new Product();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/product', $filename);
            $products->image = $filename;
        }

        $products->category_id = $request->input('category_id');
        $products->name = $request->input('name');
        $products->slug = $request->input('slug');
        $products->small_description = $request->input('small_description');
        $products->description = $request->input('description');
        $products->original_price = $request->input('original_price');
        $products->selling_price = $request->input('selling_price');
        $products->quantity = $request->input('quantity');
        $products->tax_price = $request->input('tax_price');
        $products->status = $request->input('status') == TRUE ? '1':'0';
        $products->trending = $request->input('popular') == TRUE ? '1':'0';
        $products->meta_title = $request->input('meta_title');
        $products->meta_keywords = $request->input('meta_keywords');
        $products->meta_description = $request->input('meta_description');

        $products->save();

        return redirect('/dashboard')->with('status','Producto Agregado Correctamente');
    }

    public function edit($id)
    {
        # code...
        $products = Product::find($id);

        $categories = Category::all();

        return view('admin.product.edit', compact('products', 'categories'));
    }

    public function update(Request $request, $id)
    {
        # code...
        $products = Product::find($id);

        if($request->hasFile('image')){

            $path = 'assets/uploads/product'.$products->image;

            if(File::exists($path)){
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/product', $filename);
            $products->image = $filename;
        }

        $products->name = $request->input('name');
        $products->slug = $request->input('slug');
        $products->small_description = $request->input('small_description');
        $products->description = $request->input('description');
        $products->original_price = $request->input('original_price');
        $products->selling_price = $request->input('selling_price');
        $products->quantity = $request->input('quantity');
        $products->tax_price = $request->input('tax_price');
        $products->status = $request->input('status') == TRUE ? '1':'0';
        $products->trending = $request->input('popular') == TRUE ? '1':'0';
        $products->meta_title = $request->input('meta_title');
        $products->meta_keywords = $request->input('meta_keywords');
        $products->meta_description = $request->input('meta_description');

        $products->update();

        return redirect('products')->with('status','Producto Actualizado Correctamente');
    }

    public function destroy($id)
    {
        # code...
        $products = Product::find($id);

        if($products->image){
            $path = 'assets/uploads/category'.$products->image;

            if(File::exists($path)){
                File::delete($path);
            }
        }

        $products->delete();

        return redirect('/dashboard')->with('status','Prodicto Eliminado Correctamente');
    }

}
