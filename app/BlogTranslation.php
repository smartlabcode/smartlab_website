<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogTranslation extends Model
{
    public function blog() {
        return $this->belongsTo('App\Blog');
    }
}
