<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // protected $table = 'contacts';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email','mobile','address', 'date_of_birth'];
    use HasFactory;
}