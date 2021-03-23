<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $table = "career";
    protected $fillable = ['id', 'name', 'state', 'created_at', 'updated_at'];
    
}
