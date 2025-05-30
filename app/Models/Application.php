<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Application extends Model
{
    use HasFactory, SoftDeletes;

   protected $fillable = [
    'full_name',
    'gender',
    'phone',
    'institution_name',
    'institution_code',
    'mode_of_study',
    'family_status',
    'why_bursary',
    'disability',
    'disability_description',
    'amount_requested',
];
    protected $casts = [
        'disability' => 'boolean',
        'amount_requested' => 'integer',
    ];

    // Define relationships if needed
    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function documents(): HasMany
    // {
    //     return $this->hasMany(Document::class);
    // }
}