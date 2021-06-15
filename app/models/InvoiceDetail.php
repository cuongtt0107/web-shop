<?php
namespace App\Models;
use  Illuminate\Database\Eloquent\Model ;
class InvoiceDetail extends Model{
    protected $table = 'invoice_detail_';
    public $fillable = ['invoice_id', 'product_id','quanity','unit_price'];
    public function product(){
        return $this->belongsTo(ProductModels::class,"product_id");
   }
   public function invoice(){
    return $this->belongsTo(Invoice::class,"invoice_id");
   }
}