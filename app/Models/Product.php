<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_category_id',
        'category_id',
        'sub_category_id',
        'type',
        'sub_category_item_id',
        'title',
        'description',
        'definition',
        'sterility',
        'ref_number',
        'bulk',
        'bulk_part',
        'testing',
        'latex_material',
        'ce_marking',
        'intended_use',
        'available_in',
        'quantity',
        'price',
        'discount_price'
    ];
    public function sub_products(): HasMany
    {
        return $this->hasMany(SubProduct::class, 'product_id');
    }

    public function product_images(): HasMany
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }
    public function parentCategory(): BelongsTo
    {
        return $this->belongsTo(ParentCategory::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function SubCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }
    public function SubCategoryItem(): BelongsTo
    {
        return $this->belongsTo(SubCategoryItem::class);
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }
}
