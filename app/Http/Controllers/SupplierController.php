<?php

namespace App\Http\Controllers;

use App\Models\SupplierModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SupplierController extends Controller
{
    //
    public function index(){
        $suppliers = SupplierModel::get();
        return view('supplier/manage_supplier', compact('suppliers'));
    }
    public function edit(Request $request){
        $supplier_name = $request->supplier_name;
        $supplier_company = $request->supplier_company;
        $id = $request->id;

         DB::table('suppliers')->where('id', $id)->update(['supplier_name' => $supplier_name, 'supplier_company' => $supplier_company]);




        // $update['category_name'] = $category_name;
        // $update['description'] = $description;
        // $update->save();
        // $category = CategoryModel::all();

        // $product = ProductModel::select('*')->where('product_code', $product_code)->get();

        return redirect()->back()->with(['message' => 'Successfully edited the Supplier ']);

    }
    public function destroy($id)
    {

        DB::table('suppliers')
        ->where('id',$id)
        ->delete();
        // $suppliers = SupplierModel::get();
        // $result = ProductModel::get();
        return redirect()->route('supplier.index')->with(['message' => 'Successfully deleted the Supplier']);

        // return view('/supplier/manage_supplier', compact('suppliers'))->with(['message' => 'Successfully deleted the Supplier']);
    }
    public function add(Request $request)
    {
        $supplier_name = $request->supplier_name;
        $supplier_company = $request->supplier_company;
        $data = array('supplier_name' => $supplier_name, 'supplier_company' => $supplier_company);
        SupplierModel::insert($data);
        // $result = SupplierModel::get();

        return redirect()->route('supplier.index')->with(['message' => 'Successfully added the Supplier']);
    }
}
