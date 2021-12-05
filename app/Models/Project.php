<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id', 'user_id', 'project_name', 'completed'
    ];

    // has features

    // has bugs
}
