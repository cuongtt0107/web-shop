<?php
namespace App\Controllers;

use App\Models\UseModels;
class UseController extends BaseController{
        public function loginFrom(){
            if(isset($_SESSION['auth'])){
                header("location: ".BASE_URL);
                                    exit();
            }
            else {
                return $this->render("use.login");
            }
           
        }
        public function login(){
            $email = isset($_POST['email']) == true ? trim($_POST['email']) : "";
            $password  = isset($_POST['password']) == true ? trim($_POST['password']) : "";
            
            if(empty($_POST['email']) || empty($_POST['password'])){
                header("location: loginfrom?err = nhập đủ thông tin");
                exit();
            }
            else {
                $use = UseModels::where("email",$email)->first();                  
                if($use){
                            if(password_verify($password,$use->password)){
                                $_SESSION['auth'] = [
                                    "name"=> $use->name,
                                    "email" => $use->email,
                                    "password" => $use->password,
                                    'role'=>$use->role
                                ];
                                    header("location: ".BASE_URL);
                                    exit();
                            }
                            else {
                                header("location: ".BASE_URL."loginfrom?err= 'sai mật khẩu '");
                                exit();
                            }
                }
                else{
                        header("location: ".BASE_URL."loginfrom?err='email không tồn tại '");
                        exit();
                    }
                }
            }
        public function registerFrom(){
            return $this->render("use.register");
        }
        public function register(){
            if(empty($_POST['email']) || empty($_POST['password'])){
                header("location: registerfrom&err = nhập đủ thông tin");
                exit();
            }
            else if($_POST['password']!=$_POST['password_nhaplai']){
                header("location: registerfrom&err = mật khẩu nhập lại không đúng ");
                exit();
            }
            else {
                $use = UseModels::where("email","=","$_POST[email]")->get();
                if(count($use) < 1 ) {
                        $data = $_POST;
                        $model = new UseModels();
                        $data['password'] = password_hash($_POST['password'],PASSWORD_DEFAULT);
                        $data['avatar'] = $_FILES['avatar']['name'];
                        $fileimage = 'public/update/' . uniqid() . '-' . basename($_FILES['avatar']["name"]);
                        move_uploaded_file($_FILES['avatar']['tmp_name'],$fileimage);
                        $data['role']=1;
                        $model->fill($data);
                        $model->save();
                        header("location: ".BASE_URL."loginfrom&success= 'đăng ký thành công , mời bạn đăng nhập'");
                        exit();
                }
                else {
                    header("location: registerfrom&err = email đã  tồn tại ");
                    exit();
                }                  
            }
        }
        
        public function logout(){
            unset($_SESSION['auth']);
            header("location: ".BASE_URL.'home');
            exit();
        }
 }
