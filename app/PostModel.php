<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table = 'posts';

    public function postInformation(){
        return $this->hasOne('App\PostInformationModel','post_id', 'id');
    }

    public function category(){
        return $this->belongsTo('App\CategoriesModel','category_id');
        
    }


    public function tags(){
        return $this->belongsToMany("App\TagsModel", "post_tag", "post_id", "tag_id");
    }
}


