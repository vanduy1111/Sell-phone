<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class discount extends Model
{
  protected  $fillable = ['name','init','value','start_date','end_date'];
    use HasFactory;
}
