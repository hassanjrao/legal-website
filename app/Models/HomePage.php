<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class HomePage extends Model
{
    use HasFactory;

    protected $table = 'home_page';

    protected $guarded = [];

    protected $appends=['hero_bg_image_url'];

    public function getHeroBgImageUrlAttribute()
    {
        return Storage::url($this->hero_bg_image_path);
    }
}
