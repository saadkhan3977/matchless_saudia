<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactVisit extends Model
{
    use HasFactory;
    protected $table='contact_visit';
    protected $guarded =['id'];
}
