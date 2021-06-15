<?php
namespace App\Models;
use  Illuminate\Database\Eloquent\Model ;

class CategoryModels extends Model{
    protected $table = 'categories';
    protected $attributes = ["show_menu"=>0];
    public $fillable = ['cate_name', 'desc','show_menu'];
  
    public function products(){
        return $this->hasMany(ProductModels::class,"cate_id");
    }
  
}

?>