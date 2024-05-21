<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class AboutUs extends Model
{
    use HasFactory;

    protected $table = 'about_us';

    protected $guarded = [];

    protected $appends=['video_url','image_url'];

    public function getVideoUrlAttribute()
    {
        return Storage::url($this->video_path);
    }

    public function getImageUrlAttribute()
    {
        return Storage::url($this->image_path);
    }


}
