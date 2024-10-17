<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubCategoryItem extends Model
{
    use HasFactory;
    protected $fillable = ['name','sub_category_id','status'];

    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'sub_category_item_id');
    }
}
