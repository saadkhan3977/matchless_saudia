<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSettingFavicon extends Model
{
    use HasFactory;
    protected $table='general-setting-favicon';
    protected $guarded=['id'];
}
