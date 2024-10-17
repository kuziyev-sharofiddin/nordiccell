<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'color_id',
        'name',
        'quantity',
        'price',
        'ref_number',
    ];

    public function getImageUrl()
    {
        $urlToFirstListImage = $this->getMedia("*");

        return isset($urlToFirstListImage[0]) ? $urlToFirstListImage[0]->getFullUrl() : '';
    }

    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class, 'color_id','id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
