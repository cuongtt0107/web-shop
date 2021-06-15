<?php
 namespace App\Controllers;
 use Jenssegers\Blade\Blade;
 use App\Models\CategoryModels;

 class BaseController  {
     // viewData  la mang va key va value ,  chay qua render  . mang da duoc extract 
     protected function render($viewFile,$viewData= []){
        $blade = new Blade("./app/views","./storage");
        // compact ngược lại với extract  ,  compact("a")=  ["a"=>$a] 
        echo $blade->make($viewFile, $viewData)->render();

     }
     public function __construct()
     {
         $_SESSION['danhmuc'] = CategoryModels::all()->toArray();
     }
 }