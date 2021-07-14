<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsPageDescription extends Model
{
    use HasFactory;
    protected $table='projects_page_text';
    protected $guarded=['id'];
}
