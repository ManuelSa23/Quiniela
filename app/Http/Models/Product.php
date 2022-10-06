<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Product extends Model
{
    use softDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'products';
    protected $hidden =['create_at', 'updated_at'];

    public function cat(){
        return $this->hasOne(Category::class,'id', 'category_id')->withDefault(['name' => 'name']);
    }
}
