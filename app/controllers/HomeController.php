<?php
namespace App\Controllers;

use App\Models\CategoryModels;
use App\Models\ProductModels;

class HomeController extends BaseController{
    public function index(){
        $keyword  = isset($_GET["keyword"]) == true ?  $_GET["keyword"] : "";
        if($keyword != ""){
            $cates = CategoryModels::where("cate_name","like","%$keyword%")->get();
        }
        else {
            $cates = CategoryModels::all();
        }   

        // tim hiểu thêm ;
        $cates->load("products");
        $this->render("cates.cate-list",['cates'=>$cates]);
    }
    public function home(){
        $product = new ProductModels();
        $products = $product->limit(6)->orderBy('star', 'desc')->get();
        $this->render("site.home",[
            'products'=>$products
        ]);
      
    }
    public function test(){
        $trendingProducts = ProductModels::orderBy('id', 'desc')->take(6)->get();
        $trendingProducts->load('categories');
        $this->render('layout.cilent',["products"=>$trendingProducts]);
    }

    public function about(){
       
    }
}


?>