<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function tags() {
        return $this->belongsToMany(
            Tag::class,      //related model
            'product_tag',   //pivot table name
            'product_id',    // FK in pivot table for the current model
            'tag_id',        // FK in pivot table for the related model
            'id',            // PK for current model
            'id'             // PK for related model
        );
    }
}
