<?php

namespace App\models\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $table = 'product';
    protected $fillable = ['name','details','photo','slug'];
    protected $hidden = ['created_at','	updated_at','deleted_at'];

    public function scopeSelection($query)
    {

        return $query->select('id', 'parent_id','name','details','image','created_at');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id' ,'id');
    }

}
