<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'review_meta' => 'json',
    ];

    public function reviewer()
    {
        return $this->belongsTo(Reviewer::class);
    }

    public function entity()
    {
        return $this->belongsTo(Entity::class);
    }
}
