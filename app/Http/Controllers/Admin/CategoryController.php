<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    //
    public function index()
    {
        # code...
        $category = Category::all();

        return view('admin.category.index', compact('category'));
    }

    public function add()
    {
        # code...
        return view('admin.category.add');
    }

    public function insert(Request $request)
    {
        # code...
        $category = new Category();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/category', $filename);
            $category->image = $filename;
        }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1':'0';
        $category->popular = $request->input('popular') == TRUE ? '1':'0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->meta_description = $request->input('meta_description');

        $category->save();

        return redirect('/dashboard')->with('status','Categoria Agregda Correctamente');
    }

    public function edit($id)
    {
        # code...
        $category = Category::find($id);

        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        # code...
        $category = Category::find($id);

        if($request->hasFile('image')){
            $path = 'assets/uploads/category'.$category->image;

            if(File::exists($path)){
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/category', $filename);
            $category->image = $filename;
        }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1':'0';
        $category->popular = $request->input('popular') == TRUE ? '1':'0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->meta_description = $request->input('meta_description');

        $category->update();

        return redirect('/dashboard')->with('status','Categoria Actualizada Correctamente');
    }

    public function destroy($id)
    {
        # code...
        $category = Category::find($id);

        if($category->image){
            $path = 'assets/uploads/category'.$category->image;

            if(File::exists($path)){
                File::delete($path);
            }
        }

        $category->delete();

        return redirect('/dashboard')->with('status','Categoria Eliminada Correctamente');
    }
}
