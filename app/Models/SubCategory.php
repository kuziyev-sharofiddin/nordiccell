<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\InteractsWithMedia;

class SubCategory extends Model
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = ['name','category_id','status'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id','id');
    }


    public function subCategoryItems(): HasMany
    {
        return $this->hasMany(SubCategoryItem::class, 'sub_category_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'sub_category_id');
    }
}
