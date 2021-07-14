<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    protected $table='category';
    protected $guarded=['id'];


    public function blog()
    {
        return $this->hasMany('App\Models\Blog');
    }
}
