<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutBlog extends Model
{
    use HasFactory;
    protected $table='about_blog';
    protected $guarded=['id'];
}
