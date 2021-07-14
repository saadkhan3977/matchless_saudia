<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoTools extends Model
{
    use HasFactory;
    protected $table='seotools-keywords';
    protected $guarded=['id'];
}
