<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Restaurant extends Model
{
  use HasFactory;

  public function categories(): BelongsToMany
  {
    return $this->belongsToMany(Category::class, 'restaurant_categories');
  }

  public function products(): HasMany
  {
    return $this->hasMany(Product::class);
  }
}
