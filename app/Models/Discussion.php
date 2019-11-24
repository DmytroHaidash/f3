<?php

namespace App\Models;

use App\Traits\MediaTrait;
use App\Traits\SluggableTrait;
use App\Traits\TranslatableTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\Translatable\HasTranslations;

class Discussion extends Model implements HasMedia
{
    use HasTranslations, SluggableTrait, TranslatableTrait, MediaTrait;

    public $translatable = [
        'title',
        'description'
    ];

    protected $fillable = [
        'slug',
        'title',
        'description'
    ];
}
