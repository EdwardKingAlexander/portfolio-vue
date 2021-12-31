<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ProjectFeature;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id', 'user_id', 'project_name', 'completed'
    ];

    // has features

    public function features()
    {
        return $this->hasMany(ProjectFeature::class)->orderBy('due_date');
    }

    // has bugs

    public function bugs() 
    {
        return $this->hasMany(Bug::class);
    }
}