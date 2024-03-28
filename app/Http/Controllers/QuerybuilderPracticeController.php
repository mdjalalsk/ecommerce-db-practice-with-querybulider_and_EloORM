<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuerybuilderPracticeController extends Controller
{
    public function TestAction(){
        // $result=DB::table('products')->get();// get all products
        // $result=DB::table('products')->first();//get first data in products table
        // $result=DB::table('products')->find(2);//get single specific data in products table
        // $result=DB::table('products')->count();//get total data in products table
        // $result=DB::table('products')->max('price');//get max value  in products table
        // $result=DB::table('products')->select('title')->distinct()->get();//only one unique  value  in products table
        // $result=DB::table('brands')->pluck('brandName');//get single specific column data  in Brands table
       // inner join products on categories and brands
    //    $result=DB::table('products')
    //    ->join('categories','products.category_id','=','categories.id')
    //    ->join('brands','products.brand_id','=', 'brands.id')->get();
     // left join products on categories and brands
    //    $result=DB::table('products')
    //    ->leftJoin('categories','products.category_id','=','categories.id')
    //    ->leftJoin('brands','products.brand_id','=', 'brands.id')->get();
     // right join products on categories and brands
       $result=DB::table('products')
       ->rightJoin('categories','products.category_id','=','categories.id')
       ->rightJoin('brands','products.brand_id','=', 'brands.id')->get();
     // cross join products on categories and brands
       $result=DB::table('products')
       ->crossJoin('categories')
       ->get();
        return $result;
    }
}
