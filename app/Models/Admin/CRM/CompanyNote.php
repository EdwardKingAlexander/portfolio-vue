<?php

namespace App\Models\Admin\CRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyNote extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'company_notes';

    /**
 * The attributes that should be cast.
 *
 * @var array
 */
    protected $casts = [
    'created_at' => 'datetime:m/d/Y',
    'updated_at' => 'datetime:m/d/Y',
];

    protected $fillable = [
        'company_id', 'note'
    ];
}
