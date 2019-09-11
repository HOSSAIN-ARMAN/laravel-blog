<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['slider_title', 'slider_short_description', 'slider_image', 'publication_status'];
}
