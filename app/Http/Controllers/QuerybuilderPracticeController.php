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
      //  $result=DB::table('products')
      //  ->rightJoin('categories','products.category_id','=','categories.id')
      //  ->rightJoin('brands','products.brand_id','=', 'brands.id')->get();
     // cross join products on categories and brands
      //  $result=DB::table('products')
      //  ->crossJoin('categories')
      //  ->get();
      // union join 
      // $query1 = DB::table('products')->where('products.price','>','2000');
      // $query2= DB::table('products')->where('products.discount','=','1');
      // $result=$query1->union($query2)->get();
      // search for products
      // $result = DB::table('products')->where('products.title', 'like', '%Ca%')->get();
  // whereIn for products // whereNotIn  opposite actions instead of whereIn
  // $result=DB::table('products')->whereIn('products.price',['20','5000'])->get();
  // // orWhere for products 
  // $result = DB::table('products')
  // ->where('products.price', '>', 2000)
  // ->orWhere('products.price', '=', 20)
  // ->get();
  // whereBetween for products 
  $result = DB::table('products')
  ->whereBetween('price',[1,100])
->get();
    return $result;
    }
}
