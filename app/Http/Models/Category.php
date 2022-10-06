<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Category extends Model
{
    use softDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'categories';
    protected $hidden =['create_at', 'updated_at'];
    
}
