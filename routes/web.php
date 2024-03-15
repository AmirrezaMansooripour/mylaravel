<?php

use Illuminate\Support\Facades\Route;

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
//Route Tamrin
Route::get('/cats',function(){
    $cats=DB::table('categories')->get();
    return view('taklif.cats',compact('cats'));
});
Route::get('/prods',function(){
    $prods=DB::table('products')->get();
    return view('taklif.prods',compact('prods'));
});


Route::get('/prods/new',function(){
    $prods=DB::table('products')->orderBy('id','DESC')->get();
    return view('taklif.prods',compact('prods'));
});

Route::get('/prods/{cat_id}',function($cat_id){
    $prods=DB::table('products')->where('category_id',$cat_id)->get();
    return view('taklif.prods',compact('prods'));
});

Route::get('/prod/{prod_id}',function($prod_id){
    $prod=DB::table('products')->where('id',$prod_id)->first();
    return view('taklif.prod',compact('prod'));
});

Route::prefix('/admin')->group(function(){
    Route::prefix('/products')->group(function(){
        Route::get('/',function(){
            $prods=DB::table('products')->get();
            return view('taklif.admin.products.view',compact('prods'));
        });
        Route::get('/update/{prod_id}',function($prod_id){
            $prod=DB::table('products')->where('id',$prod_id)->first();
            $category=DB::table('categories')->where('id',$prod->category_id)->first();
            return view('taklif.admin.products.update',compact('prod','category'));
        });
        Route::get('/create',function(){
            return view('taklif.admin.products.create');
        });
    });
    Route::get('/categories',function(){
        $cats=DB::table('categories')->get();
        return view('taklif.admin.categories',compact('cats'));
    });
});

//________________________________________________________________________________________
//Route Home
Route::get('/home', function () {
    return view('home.home');
});

//Route user
Route::prefix('/user')->group(function () {
    Route::get('/create', function () {
        return view('user.create');
    });
    Route::get('/login', function () {
        return view('user.login');
    });
    Route::get('/profile', function () {
        return view('user.profile');
    });
    Route::get('/update', function () {
        return view('user.update');
    });
});

//Route Post
Route::prefix('/post')->group(function () {
    Route::get('/create', function () {
        return view('post.create');
    });
    Route::get('/login', function () {
        return view('post.login');
    });
    Route::get('/profile', function () {
        return view('post.profile');
    });
    Route::get('/page', function () {
        return view('post.page');
    });
    Route::get('/update', function () {
        return view('post.update');
    });
});


