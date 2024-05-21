<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PracticeArea extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'practice_areas';

    protected $guarded = [];

    protected $appends=['image_url'];
}
