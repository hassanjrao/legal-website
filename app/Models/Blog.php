<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'blogs';

    protected $guarded = [];

    protected $appends=['image_url','short_description'];

    public function getImageUrlAttribute()
    {
        return Storage::url($this->image_path);
    }

    public function getShortDescriptionAttribute()
    {
        // remove all HTML tags
        $string = strip_tags($this->description);

        if (strlen($string) > 100) {

            $string=substr($string, 0, 100).'...';
        }

        return $string;

    }

    public function comments()
    {
        return $this->hasMany(BlogComment::class);
    }
}
