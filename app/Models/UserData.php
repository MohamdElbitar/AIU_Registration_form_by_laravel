<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserData extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name_arabic',
        'full_name_english',
        'gender',
        'birth_date',
        'birth_country',
        'birth_city',
        'mobile_number',
        'email',
        'national_id_number',
        'national_id_passport_copy',
        'residential_region_city',
        'residential_address',
        'guardian_name_arabic',
        'guardian_national_id',
        'guardian_mobile_number',
        'guardian_email',
        'certificate_issue_country',
        'certificate_issue_city_region',
        'school_name',
        'seating_number',
        'school_graduation_year',
        'certificate_type',
        'total_score',
        'percentage',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
