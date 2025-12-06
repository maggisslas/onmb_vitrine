<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $guarded = ['id'];

    // RelationShip
    public function user(){
        return $this->belongsTo(User::class);
    }


    public function article(){
        return $this->hasMany(Article::class);
    }

    public function nbr_article(){
        return $this->article->count();
    }

}
