<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactQuestion extends Model
{
    use HasFactory;
    protected $table='contact_question';
    protected $guarded =['id'];
}
