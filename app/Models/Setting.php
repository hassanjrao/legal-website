<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Setting extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $appends=['logo_url','favicon_url'];

    public function getLogoUrlAttribute()
    {
        return asset($this->logo_path);
    }

    public function getFaviconUrlAttribute()
    {
        return asset($this->favicon_path);
    }
}
