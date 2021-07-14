<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialSettingFacebook extends Model
{
    use HasFactory;
    protected $table='social-setting-facebook';
    protected $guarded=['id'];
}
