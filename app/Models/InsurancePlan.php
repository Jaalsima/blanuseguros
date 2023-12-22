<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsurancePlan extends Model
{
    use HasFactory;

    protected $fillable = [

        'insurance_line_id',
        'name',
        'description',
        'coverage',
        'price',
        'is_active',
        'image',
    ];

    public function insuranceLine()
    {
        return $this->belongsTo(InsuranceLine::class);
    }

    public function insurancePolicies()
    {
        return $this->hasMany(InsurancePolicy::class);
    }
}
