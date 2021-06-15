<?php
    const BASE_URL = "http://localhost/php2_12/buoi3/mvc/";
    const PUBLIC_URL = BASE_URL . 'public/';
const THEME_ASSET_URL = PUBLIC_URL . 'theme/';
const CILENT = PUBLIC_URL . 'cilent/';
const UPLOAD_FILE = PUBLIC_URL.'update/' ;
const MEMBER_ROLE = 1;
const ADMIN_ROLE = 200;
const AUTH = 'auth';
        function checkUse($role = MEMBER_ROLE){
            if(!isset($_SESSION['auth']) ){
                header("location: ".BASE_URL."loginfrom");
                exit();
            }
            if($_SESSION['auth']['role']< $role){
                    header("location: ".BASE_URL."?err='bạn không đủ thầm quyền'");
                    exit();
            }
        }
?>    

