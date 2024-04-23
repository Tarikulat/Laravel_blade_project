<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesorderController;
use App\Http\Controllers\PurchaseorderController;
use App\Http\Controllers\PurchaseCartController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HeaderController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make web something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('frontend.layout.home');
})->middleware(['auth', 'verified'])->name('header');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('chart', [HeaderController::class, 'chart']);


    
});

require __DIR__.'/auth.php';

/*--------------------categories below--------------------*/

Route::get('/addcategories', [CategorieController::class, 'create'])->name('categorie');
Route::post('/storecategories', [CategorieController::class, 'store'])->name('c_add');
Route::get('/viewcategories', [CategorieController::class, 'show'])->name('c_show');
Route::get('/edit/{id}/user', [CategorieController::class, 'edit'])->name('c_editview');
Route::put('/update/{id}/user', [CategorieController::class, 'update'])->name('c_update');
Route::get('/delete/{id}/', [CategorieController::class, 'destroy'])->name('c_destroy');

/*-----------------------unit----------------------------*/

Route::get('/addunits', [UnitController::class, 'create'])->name('unit');
Route::post('/storeunits', [UnitController::class, 'store'])->name('u_add');
Route::get('/viewunits', [UnitController::class, 'show'])->name('u_show');
Route::get('/u_edit/{id}/user', [UnitController::class, 'edit'])->name('u_editview');
Route::put('/u_update/{id}/user', [UnitController::class, 'update'])->name('u_update');
Route::get('/u_delete/{id}/', [UnitController::class, 'destroy'])->name('u_destroy');

/*---------------------------brand-----------------------------*/
Route::get('/addbrands', [BrandController::class, 'create'])->name('brand');
Route::post('/storebrands', [BrandController::class, 'store'])->name('b_add');
Route::get('/viewbrands', [BrandController::class, 'show'])->name('b_show');
Route::get('/b_edit/{id}/user', [BrandController::class, 'edit'])->name('b_editview');
Route::put('/b_update/{id}/user', [BrandController::class, 'update'])->name('b_update');
Route::get('/b_delete/{id}/', [BrandController::class, 'destroy'])->name('b_destroy');

/*-----------------------------customer--------------------*/
Route::get('/addcustomers', [CustomerController::class, 'create'])->name('customer');
Route::post('/storecustomers', [CustomerController::class, 'store'])->name('cu_add');
Route::get('/viewcustomers', [CustomerController::class, 'show'])->name('cu_show');
Route::get('/cu_edit/{id}/user', [CustomerController::class, 'edit'])->name('cu_editview');
Route::put('/cu_update/{id}/user', [CustomerController::class, 'update'])->name('cu_update');
Route::get('/cu_delete/{id}/', [CustomerController::class, 'destroy'])->name('cu_destroy');

/*----------------------------product-------------------------*/

Route::get('/addproducts', [ProductController::class, 'create'])->name('product');
Route::post('/storeproducts', [ProductController::class, 'store'])->name('pro_add');
Route::get('/viewproducts', [ProductController::class, 'show'])->name('pro_show');
Route::get('/pro_edit/{id}/user', [ProductController::class, 'edit'])->name('pro_editview');
Route::put('/pro_update/{id}/user', [ProductController::class, 'update'])->name('pro_update');
Route::get('/pro_delete/{id}/', [ProductController::class, 'destroy'])->name('pro_destroy');

/*-----------------------------------------supplier---------------*/

Route::get('/addsuppliers', [SuppliersController::class, 'create'])->name('supplier');
Route::post('/storesuppliers', [SuppliersController::class, 'store'])->name('su_add');
Route::get('/viewsuppliers', [SuppliersController::class, 'show'])->name('su_show');
Route::get('/su_edit/{id}/user', [SuppliersController::class, 'edit'])->name('su_editview');
Route::put('/su_update/{id}/user', [SuppliersController::class, 'update'])->name('su_update');
Route::get('/su_delete/{id}/', [SuppliersController::class, 'destroy'])->name('su_destroy');

/*----------------------------salesorder----------------------*/

Route::get('/salesorder',[SalesorderController::class, 'index'])->name('salesorder');
Route::get('/search-product',[SalesorderController::class, 'index'])->name('search-product');

/*----------------------------cart----------------------*/
Route::post('/add-cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart-update/{rowId}', [CartController::class, 'CartUpdate'])->name('update');
Route::get('/cart-remove/{rowId}', [CartController::class, 'CartRemove'])->name('remove');
Route::post('/create-invoice', [CartController::class, 'CreateInvoice'])->name('invoice');

/*----------------------------purchaseorder----------------------*/

Route::get('/purchaseorder',[PurchaseorderController::class, 'index'])->name('purchaseorder');
Route::get('/search-product',[PurchaseorderController::class, 'index'])->name('search-product');

/*----------------------------purchasecart----------------------*/
Route::post('/add-cart', [PurchaseCartController::class, 'index'])->name('cart');
Route::post('/purcart-update/{rowId}', [PurchaseCartController::class, 'PurCartupdate'])->name('purupdate');
Route::get('/purcart-remove/{rowId}', [PurchaseCartController::class, 'PurCartRemove'])->name('purremove');
Route::post('/purcreate-invoice', [PurchaseCartController::class, 'CreateInvoice'])->name('purinvoice');



