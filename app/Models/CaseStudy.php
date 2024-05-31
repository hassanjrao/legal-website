<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class CaseStudy extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'case_studies';

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
}
