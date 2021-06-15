<?php
namespace App\Controllers;
use PDO;
use PDOException;
use App\Models\ProductModels;
use App\Models\Invoice;
use App\Models\InvoiceDetail;

use function PHPSTORM_META\type;

class InvoiceController extends BaseController{
public function __construct()
{
   $this->Invoice =   new Invoice();
   $this->InvoiceDetail =   new InvoiceDetail();

}
    public function show_cart(){
        $this->render("site.cart",[]);

    }
    public function add_cart(){
        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $productId = ProductModels::find($id)->toArray();
            if(!isset($_SESSION['cart'])){
                $cart = array();
                $cart[$id]=[
                    "id"=>$id,
                    "name" => $productId['name'],
                    "image"=>$productId['image'],
                    "price"=>$productId['price'],
                    "number"=> 1,
                ];
            }
          else {
            $cart= $_SESSION['cart'];
            if(array_key_exists($id,$cart)){
                $cart[$id]['number']= $cart[$id]['number']+1;
            }
            else {
                $cart[$id]=[
                    "id"=>$id,
                    "name" => $productId['name'],
                    "image"=>$productId['image'],
                    "price"=>$productId['price'],
                    "number"=> 1,
                ];
            }
          }

          
            $_SESSION['cart'] = $cart;
            return $_SESSION['cart'];

        }
    }
    public function updateCart(){
        $id = $_POST['id'];
        $number = $_POST['number'];
        $cart= $_SESSION['cart'];
        if(array_key_exists($id,$cart)){
          if($number>0){

            $cart[$id] = array(
                "name"=>$_SESSION['cart'][$id]['name'],
                "id"=>$id,
                'number'=>$number,
                'price'=>$_SESSION['cart'][$id]['price'],
                'image'=>$_SESSION['cart'][$id]['image'],
            );
          }

          else {
              unset(  $cart[$id]);
          }
        }
        $_SESSION['cart']= $cart ;
    }
    public function checkout(){
        $this->render("site.Checkout",[]);
    }
    public function xoa(){
        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $cart= $_SESSION['cart'];
            if(array_key_exists($id,$cart)){
                unset(  $cart[$id]);
            }
                $_SESSION['cart']= $cart ;
        }
       
    }
    public function new_invoice(){
        $_POST['total_price'] = (int)$_SESSION['tong_tien'];
        $data = $_POST;
        $this->Invoice->fill($data);
        $this->Invoice->save();
        $id = $this->Invoice->id;
        foreach($_SESSION['cart'] as $cart){
            $new = new InvoiceDetail();
            $newdata['invoice_id'] = $id;
            $newdata['product_id'] = $cart['id'];
            $newdata['quanity'] = $cart['number'];
            $newdata['unit_price'] = $cart['price'];
            $new->fill($newdata);
            $new->save();

        } 
        unset($_SESSION["cart"],$_SESSION['tong_tien']);
      
        header("location: don-hang/ $id");die;

    }
    public function list_invoice(){
        $invoice = Invoice::all();
        $this->render("invoice.list-invoice",[
            "invoice"=>$invoice
        ]);
    }
    public function invoice_detail(){
            
            $invoice = $_GET['id'];
            $invoiceDetail = InvoiceDetail::where("invoice_id",$invoice)->get();
           $this->render("invoice.invoice_detail",[
               'invoiceDetail'=>$invoiceDetail
           ]);
           
    }
    public function donhang($id){
        $invoice = Invoice::find($id);
        $invoiceDetail = InvoiceDetail::where("invoice_id",$id)->get();
        $this->render("site.invoice",[
            'invoiceDetail'=>$invoiceDetail,
            'invoice'=>$invoice
        ]);
    }
 }