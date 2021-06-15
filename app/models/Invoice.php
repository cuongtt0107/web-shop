<?php
namespace App\Models;
use  Illuminate\Database\Eloquent\Model ;
class Invoice extends Model{
    protected $table = 'invoices';
    public $fillable = ['customer_name', 'customer_email','customer_phone_number','customer_address','total_price'];
    public function invoice_detail(){
        return $this->hasMany(invoice_detail::class,"invoice_id");
    }
  
}