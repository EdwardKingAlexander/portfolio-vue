<?php

namespace App\Models\Admin\CRM;

use Database\Factories\CompanyFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /**
     *
     * @return CompanyFactory
     */

    protected static function newFactory()
    {
        return CompanyFactory::new();
    }

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'companies';

    protected $fillable = [
        'company_name' ,'is_customer', 'last_contact', 'street_address', 'city', 'state', 'zip_code',
        'email_address', 'url', 'phone', 'fax', 'bill_to_address', 'slug'
    ];

    
    /**
 * The attributes that should be cast.
 *
 * @var array
 */
    protected $casts = [
    'created_at' => 'datetime:m/d/Y',
    'updated_at' => 'datetime:m/d/Y',
];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function showNotes()
    {
        return $this->hasMany(CompanyNote::class, 'company_id');
    }
}
