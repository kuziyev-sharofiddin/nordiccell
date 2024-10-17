<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\InteractsWithMedia;

class ProductImage extends Model
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'product_id',
        'color_id',
        'name',
        'ref_number',
    ];

    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class, 'color_id');
    }


    public function getImageUrl()
    {
        $urlToFirstListImage = $this->getMedia("*");

        return isset($urlToFirstListImage[0]) ? $urlToFirstListImage[0]->getFullUrl() : '';
    }
}
