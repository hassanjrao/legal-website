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

    protected $appends=['image_url'];

    public function getImageUrlAttribute()
    {
        return Storage::url($this->image_path);
    }
}
