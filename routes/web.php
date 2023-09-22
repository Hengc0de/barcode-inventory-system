<?php
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/fetch_credit/{customer_phone_number}', [POSController::class, 'fetch_credit'])->name('fetch_credit');
Route::get('/fetch_credit/not_enough/{customer_phone_number}', [POSController::class, 'fetch_credit_not_enough'])->name('fetch_credit_not_enough');

Route::get('/logout', [ProfileController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('/auth/login');
})->name('login');

Route::get('/register', function () {
    return view('/auth/register');
})->name('register');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:admin'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/index', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/view', [ProfileController::class, 'profile_store'])->name('profile.store');

    Route::get('/profile/view', [ProfileController::class, 'profile'])->name('profile.view');


    Route::get('/category/add_category', [CategoryController::class, 'add_category']);
    Route::post('/category/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::delete('/category/delete_category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::post('/category/add_category/add', [CategoryController::class, 'add'])->name('category.add');
    Route::get('/category/manage_category', [CategoryController::class, 'index'])->name('category.index');



    Route::get('/product/manage_product', [ProductController::class, 'index'])->name('product.index');
    Route::post('/product/add_product/add', [ProductController::class, 'add'])->name('product.add');
    Route::post('/product/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('/product/grid_view', [ProductController::class, 'grid_view'])->name('product.grid_view');
    Route::get('/product/add_product', [ProductController::class, 'add_product']);
    Route::delete('/product/delete_product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::get('/product/view_product/{product_code}', [ProductController::class, 'view_product'])->name('product.view_product');





    Route::get('/supplier/manage_supplier', [SupplierController::class, 'index'])->name('supplier.index');
    Route::post('/supplier/edit', [SupplierController::class, 'edit'])->name('suppliers.edit');
    Route::delete('/supplier/delete_supplier/{id}', [SupplierController::class, 'destroy'])->name('suppliers.destroy');
    Route::post('/supplier/add', [SupplierController::class, 'add'])->name('supplier.add');
    Route::get('/supplier/add_supplier', function(){
        return view('supplier.add_supplier');
    });

    Route::get('/pos/manage', [POSController::class, 'manage'])->name('pos.manage');
    Route::get('/pos/view_pdf/{id}', [POSController::class, 'view_pdf'])->name('pos.view_pdf');
    Route::get('/pos/print_pdf/{id}', [POSController::class, 'print_pdf'])->name('pos.print_pdf');
    Route::get('/pos/delete/{id}', [POSController::class, 'delete'])->name('pos.delete');


});
require __DIR__ . '/auth.php';


Route::middleware(['auth','role:employee' ])->group(function(){
    Route::get('/employee/index', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/pos', [POSController::class, 'index'])->name('pos.index');
    Route::get('/pos/add/{id}', [POSController::class, 'add'])->name('pos.add');
    Route::get('/pos/add_table', [POSController::class, 'add_table'])->name('pos.add_table');

    Route::post('/', [CartController::class, 'add'])->name('cart.add');
    Route::post('/add_to_cart', [CartController::class, 'add_barcode'])->name('cart.add_barcode');

    Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/create_order', [CartController::class, 'create_order'])->name('cart.create_order');


});
Route::middleware(['auth','role:customer'])->group(function(){
    Route::get('/customer/index', [customerController::class, 'index'])->name('customer.index');

});
