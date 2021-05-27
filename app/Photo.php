<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Photo extends Model
{
    /**
     * The photo_categories that belong to the Photo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function photo_categories(): BelongsToMany
    {
        return $this->belongsToMany(PhotoCategory::class, 'photo_categories_photos');
    }
}