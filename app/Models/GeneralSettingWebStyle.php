<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSettingWebStyle extends Model
{
    use HasFactory;
    protected $table='general-setting-webstyle';
    protected $guarded=['id'];
}
