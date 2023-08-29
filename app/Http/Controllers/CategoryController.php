<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{

    public function add_category()
    {
        return view('category.add_category');
    }
    public function index()
    {
        $result = CategoryModel::get();

        return view('category.manage_category', ['category' => $result]);
    }
    public function add_product()
    {
        $result = CategoryModel::get();
        return view('product.add_product', ['products' => $result]);
    }
    public function add(Request $request)
    {
        $category_name = $request->category_name;
        $description = $request->description;
        $data = array('category_name' => $category_name, 'description' => $description);
        CategoryModel::insert($data);
        $result = CategoryModel::get();

        return view('category.manage_category', ['category' => $result]);
    }
    public function destroy($id)
    {

        DB::table('categories')
        ->where('catid',$id)
        ->delete();

        // $result = ProductModel::get();
        return redirect()->back()->with(['message' => 'Successfully deleted the category ']);
    }
    public function edit(Request $request){
        $category_name = $request->category_name;
        $description = $request->description;
        $id = $request->catid;

         DB::table('categories')->where('catid', $id)->update(['category_name' => $category_name, 'description' => $description]);




        // $update['category_name'] = $category_name;
        // $update['description'] = $description;
        // $update->save();
        // $category = CategoryModel::all();

        // $product = ProductModel::select('*')->where('product_code', $product_code)->get();

        return redirect()->back()->with(['message' => 'Successfully edited the product ']);

    }
}
