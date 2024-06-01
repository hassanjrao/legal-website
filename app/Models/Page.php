<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $appends=['short_content'];


    public function getShortContentAttribute()
    {
        // remove all HTML tags
        $string = strip_tags($this->content);

        if (strlen($string) > 100) {

            $string=substr($string, 0, 100).'...';
        }

        return $string;

    }

}
