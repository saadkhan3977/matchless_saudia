<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialSettingGoogle extends Model
{
    use HasFactory;
    protected $table='social-setting-google';
    protected $guarded=['id'];
}
