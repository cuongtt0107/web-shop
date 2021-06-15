<?php
namespace App\Models;
 use  Illuminate\Database\Eloquent\Model ;
class ProductModels extends Model{
    protected $table = "products";
    public $fillable = ['name', 'image','cate_id','price','short_desc','detail'];
  
    public function categories(){
         return $this->belongsTo(CategoryModels::class,"cate_id");
    }
}