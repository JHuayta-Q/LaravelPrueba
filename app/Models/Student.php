<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "student";
    protected $fillable = ['id', 'name', 'code', 'career', 'state', 'created_at', 'updated_at'];
    
}
