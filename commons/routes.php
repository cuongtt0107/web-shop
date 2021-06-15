<?php
use App\Controllers\InvoiceController;
use App\Controllers\CategoryController;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\UseController;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;

$router = new RouteCollector();

# định nghĩa filter
$router->filter('auth', function(){    
        if(!isset($_SESSION[AUTH]) || empty($_SESSION['auth']) ){
            header("location: ".BASE_URL."loginfrom");
            exit();
        }
        if($_SESSION['auth']['role']< 200){
            header("location: ".BASE_URL."home?err='bạn không đủ thầm quyền'");
            exit();
    }
       
});

// admin 
 $router->get('/', [HomeController::class, "index"],['before'=>'auth']  );
 $router->get('new-cate', [CategoryController::class, "addNew"],['before'=>'auth'] );
 $router->post('new-cate', [CategoryController::class, "saveCate"],['before'=>'auth'] );
 $router->get('edit-cate', [CategoryController::class, "editCate"],['before'=>'auth']  );
 $router->post('edit-cate', [CategoryController::class, "saveEdit"],['before'=>'auth']  );
 $router->get('remove-cate', [CategoryController::class, "removeCate"],['before'=>'auth']  );
 $router->get('category', [CategoryController::class, "index"] );
 $router->get('category/{name}/{id}', [CategoryController::class, "detailCate"] );
// start home 
$router->get('home', [HomeController::class, "home"] );
// end home 

$router->get('products', [ProductController::class, "index"],['before'=>'auth']  );
$router->get('product/{id}', [ProductController::class, "detaiProduct"]  );
$router->get('removeproduct', [ProductController::class, "removeproduct"],['before'=>'auth']  );
$router->get('newproduct', [ProductController::class, "addNewProduct"],['before'=>'auth']  );
$router->post('newproduct', [ProductController::class, "saveNewProduct"],['before'=>'auth']  );
$router->get('editproduct', [ProductController::class, "editproduct"],['before'=>'auth']  );
$router->post('editproduct', [ProductController::class, "updateproduct"],['before'=>'auth'] );


// start use
$router->get('loginfrom', [UseController::class, "loginFrom"] );
$router->post('login', [UseController::class, "login"] );
$router->get('registerfrom', [UseController::class, "registerFrom"] );
$router->post('register', [UseController::class, "register"] );
$router->get('logout', [UseController::class, "logout"] );
//end use

// start invoice
$router->get('cart', [InvoiceController::class, "show_cart"] );
$router->post('add-cart', [InvoiceController::class, "add_cart"] );
$router->post('updateCart', [InvoiceController::class, "updateCart"] );
$router->get('checkout', [InvoiceController::class, "checkout"] );
$router->post('xoa', [InvoiceController::class, "xoa"] );
$router->post('new-invoice', [InvoiceController::class, "new_invoice"] );
$router->get('invoice', [InvoiceController::class, "list_invoice"],['before'=>'auth']  );
$router->get('invoicedetail', [InvoiceController::class, "invoice_detail"],['before'=>'auth']  );
$router->get('don-hang/{id}', [InvoiceController::class, "donhang"]  );


// $router->get('/new-cate', [CategoryController::class, "addNew"]);
// $router->post('/new-cate', [CategoryController::class, "saveCate"]);


// $router->get('/thong-tin-san-pham/{id}', [ProductController::class, "detail"]);
// // $router->get('/add', ['Controllers\HomeController', "add"]);
// // $router->post('/add', ['Controllers\HomeController', "saveAdd"]);


$router->get('error-404', function(){
    echo "duong dan k ton tai  "; die;
});

$dispatcher = new Dispatcher($router->getData());
try{
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
}catch(HttpRouteNotFoundException $ex){
    header('location: ' . BASE_URL . 'error-404');
    die;
}

?>