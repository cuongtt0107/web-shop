<?php
namespace App\Controllers;
use App\Models\CategoryModels;
use App\Models\ProductModels;
class ProductController extends BaseController{
    public function __construct()
    {
      $this->ProductModels = new ProductModels;
    }
      public function index(){

        $pageNumber = isset($_GET['page'])== true ? $_GET['page'] : 1;
        $pagesize = isset($_GET['pagesize']) == true ? $_GET['pagesize'] : 15;
        $offset = ($pageNumber - 1 ) * $pagesize;

        $keyword  = isset($_GET["keyword"]) == true ?  $_GET["keyword"] : "";
        if($keyword != ""){
            $products = ProductModels::where("name","like","%$keyword%")
            ->take($pagesize)
            ->skip($offset)
            ->get();
            $totalPage = intval(ceil(ProductModels::where("name", "like", "%$keyword%")->count()/$pagesize));
        }
        else {
          $products = ProductModels::take($pagesize)
          ->skip($offset)
          ->get();
          $totalPage = intval(ceil(ProductModels::count()/$pagesize));

        }
        $products->load("categories");

        $this->render("products.product-list",["products"=>$products,"totalPage" =>$totalPage ,'stt'=>$offset]);
      }
      public function removeproduct(){
         $id = $_GET['id'];
         ProductModels::destroy($id);
        header("location:products");die;
      }
      public function addNewProduct(){
              $err = isset($_SESSION['err']) ? $_SESSION['err'] : [];
              $value = isset($_SESSION['data']) ? $_SESSION['data'] : [];
              unset($_SESSION['err']);
              unset($_SESSION['data']);
              $cate = CategoryModels::all();
              $this->render("products.add-product",[
                "cate"=>$cate,
                "err"=>$err,
                "data"=>$value
              ]);
        }

      public function saveNewProduct(){
          $err = [];
          $data = [];
      
          foreach($_POST as $key=>$value){
            if(empty($value)){
              $err[$key] = "mời bạn nhập dữ liệu";
            }
            else {
              $data[$key] = $value;
            }
          }
          if($_FILES['file']['size'] <= 0){
            $err["file"] = "mời bạn chọn ảnh";
          }
          
        
          if(count($err) > 0 ){
                  $_SESSION['err'] = $err;
                  $_SESSION['data'] = $data;
                  header('Location: '. BASE_URL."newproduct");
                  die;
          }

          $data = $_POST;
              $file = $_FILES['file'];
              $avatar = '';
              if($file['size']>0){
                  $avatar = 'public/update/' . uniqid() . '-' . $file['name'];
                  move_uploaded_file($file['tmp_name'],$avatar);
                  $data['image'] = $avatar;
              };
              $this->ProductModels->fill($data);
              $this->ProductModels->save();
              header('location: products');
     }
     public function editproduct(){
       $id = $_GET['id'];
       $productdetail = ProductModels::find($id);
       $cate = CategoryModels::all();
       $this->render("products.edit-product",[
         "cate"=>$cate,
         "productdetail"=>$productdetail
       ]);
     }
     public function updateproduct(){
       $model = ProductModels::find($_GET['id']);
             $data = $_POST;
           $file = $_FILES['file'];
           $avatar = '';
           if($file['size']>0){
               $avatar = 'public/update/' . uniqid() . '-' . $file['name'];
               move_uploaded_file($file['tmp_name'],$avatar);
               $data['image'] = $avatar;
           };
            $model->fill($data);
           $model->save();
           header('location: products');
     }
     public function detaiProduct($id){
      
      $model = ProductModels::find($id);
      $model->load("categories");
      $relatedProduct = ProductModels::where("cate_id",$model->cate_id)
                                      ->where("id","<>",$model->id)
                                      ->take(3)->get();
                                
      $this->render("site.productDetail",[
        'productDetail'=>$model,
        "relatedProduct"=>$relatedProduct
           ]);

     }
       
      

}


?>