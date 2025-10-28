<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'short_review',
        'detail_review',
        'review_meta',
        'reviewer_id',
        'entity_id',
    ];

    protected $casts = [
        'review_meta' => 'array',
    ];

    public function reviewer()
    {
        return $this->belongsTo(Reviewer::class);
    }

    public function entity(): BelongsTo
    {
        return $this->belongsTo(Entity::class);
    }
}
