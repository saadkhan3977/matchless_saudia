<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialSettingLinks extends Model
{
    use HasFactory;

    protected $table='social-setting-links';
    protected $guarded=['id'];
}
