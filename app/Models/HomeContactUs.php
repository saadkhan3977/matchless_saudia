<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeContactUs extends Model
{
    use HasFactory;
    protected $table='home_contact_us';
    protected $guarded=['id'];
}
