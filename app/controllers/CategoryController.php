<?php
namespace App\Controllers;

use App\Models\CategoryModels;
use App\Models\ProductModels;
use PDO;
use PDOException;

class CategoryController extends BaseController{


    public function index(){
        $keyword  = isset($_GET["keyword"]) == true ?  $_GET["keyword"] : "";
        if($keyword != ""){
            $cates = CategoryModels::where("cate_name","like","%$keyword%")->get();
        }
        else {
            $cates = CategoryModels::all();
        }
        $this->render("cates.cate-list",['cates'=>$cates]);
    }
    public function editCate(){
        $id = $_GET['id'];
        $model = CategoryModels::find($id);
        $err = isset($_SESSION['err']) ? $_SESSION['err'] : [];
        $value = isset($_SESSION['value']) ? $_SESSION['value'] : [];
        unset($_SESSION['err']);
        unset($_SESSION['value']);
        if($model){
           $this->render("cates.edit-cate",[
               "cate"=>$model,
               "err"=>$err,
               "value"=>$value
           ]);
          
        }else {
            header('location:' .BASE_URL);
        }
    }

    public function addNew(){
      
       $this->render("cates.addCate");
      
    }
    public function saveCate(){
        $dem = 0;
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $err['name']="";
            $data = [];
           if(empty($_POST['cate_name'])){
               $err['name'] = "nhap du lieu";
               $dem = 1;
           }
           else if(count(CategoryModels::where("cate_name",$_POST['cate_name'])->get())>0  ) {
                    $err['name'] = "danh muc da ton tai";
                    $dem = 1;
                }
                else {
                    $data['name'] = $_POST['cate_name'];
                }
           if(empty($_POST['desc'])){
            $err['mota'] = "nhap du lieu";
            $dem = 1;
           }
           else {
            $data['mota'] = $_POST['desc'];
           }   

           if($dem ==0){
               echo 1;
            $model = new CategoryModels();
            $model->fill($_POST);
                    try{
                        $model->save();
                        header('location:' .BASE_URL);
                    }
                    catch(PDOException $e){
                        $this->render("cates.addCate",[
                            "err"=>"  say ra loi "
                        ]);     
                    }  
            }
            else {
                $this->render("cates.addCate",["err"=>$err,"data"=>$data]);
            }
           
         }
}
    public function saveEdit(){
        $id = $_GET['id'];
        $model = CategoryModels::find($id);
        if(!$model){
            header('location: '.BASE_URL);
            die;
        }
        $err = [];
        $value = [];
        if(empty($_POST['cate_name'])){
          
            $err['cate_name'] = "mời bạn nhập danh mục";
            $value['value_name'] = "";    
        }
        elseif(count(CategoryModels::where("cate_name",$_POST['cate_name'])->where("id","<>",$id)->get())>0 ){
            $err['cate_name'] = "Danh mục đã tồn tại";
            $value['value_name'] =$_POST['cate_name']; 
        }  
        else{
            $value['value_name'] = $_POST['cate_name'];
        }
        if(empty($_POST['desc'])){
            $err['desc'] = "mời bạn nhập mô tả ";
            $value['value_desc'] = "";    
        }
        else{
            $value['value_desc'] = $_POST['desc'];    
        }
        if(count($err) > 0 ){
                $_SESSION['err'] = $err;
                $_SESSION['value'] = $value;
                header('Location: '. BASE_URL.'edit-cate?id='.$id);
                die;
        }
        $_POST['show_menu'] = isset($_POST['show_menu']) == true ? $_POST['show_menu'] : "0";
        $model->fill($_POST);
        $model->save();
        header('location: '.BASE_URL."category");
        die;
    }

    public function removeCate(){
        $id = $_GET['id'];
        $model = CategoryModels::find($id);
        if(!$model){
            header('location: BASE_URL');
            die;
        }
        ProductModels::where('cate_id', $id)->delete();
        $model->delete();
        header('location: '.BASE_URL."category");
    }
    public function detailCate($name,$id){
        $pageNumber = isset($_GET['page'])== true ? $_GET['page'] : 1;
        $pagesize = isset($_GET['pagesize']) == true ? $_GET['pagesize'] : 9;
        $offset = ($pageNumber - 1 ) * $pagesize;
       $cateId= CategoryModels::find($id);
       $products = ProductModels::where("cate_id",$cateId->id)->take($pagesize)->skip($offset)->get();
       $totalPage = intval(ceil( $cateId->products->count()/$pagesize));
       $this->render("cates.cateDetail",['products'=>$products,'totalPage'=>$totalPage,'cateId'=> $cateId]);
    }
   

}
