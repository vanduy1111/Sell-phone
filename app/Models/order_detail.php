<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    use HasFactory;
    protected $fillable = ['order_id','product_id','quantity','price'];
    public function products(){

        return $this->belongsTo(product::class,'product_id' );
    }
}
