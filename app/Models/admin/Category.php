<?php

namespace App\models\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table = 'category';
    protected $fillable = ['parent_id','name','details','image'];
    protected $hidden = ['created_at','	updated_at','deleted_at'];

    public function scopeSelection($query)
    {

        return $query->select('id', 'parent_id','name','details','image','created_at');
    }

}
