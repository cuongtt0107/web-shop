<?php
namespace App\Models;
 use  Illuminate\Database\Eloquent\Model ;
class UseModels extends Model{
    protected $table = "users";
    public $fillable = ['name', 'avatar','email','password','role'];

    
}