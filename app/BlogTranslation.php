<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogTranslation extends Model
{
    protected $table = 'blog_translations';

    public $timestamps = false;

    public function blog() {
        return $this->belongsTo('App\Blog');
    }
}
