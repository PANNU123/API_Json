<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JsonController extends Model
{
    use HasFactory;
    protected $fillable  = [
        'emp_id','first_name','last_name','title','salary'
    ];
}
