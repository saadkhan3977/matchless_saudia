<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeProjects extends Model
{
    use HasFactory;
    protected $table='home_projects';
    protected $guarded =['id'];
}
