<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // id, name, slug, created_at, updated_at

    protected $fillable = ['id','name','slug'];
}
