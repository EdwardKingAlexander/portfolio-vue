<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    use HasFactory;

    protected $fillable = [
        'bug_description', 'project_id', 'resolved', 'solution'
    ];
    // belongs to a project

    public function parentProject() 
    {
        return $this->belongsTo(ProjectFeature::class);
    }
    
}
