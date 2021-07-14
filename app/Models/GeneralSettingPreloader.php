<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSettingPreloader extends Model
{
    use HasFactory;
    protected $table='general-setting-preloader';
    protected $guarded=['id'];
}
