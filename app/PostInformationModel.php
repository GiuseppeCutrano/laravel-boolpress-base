<?php

namespace App;
use App\PostInformation;

use Illuminate\Database\Eloquent\Model;

class PostInformationModel extends Model
{
    protected $table = 'posts_information';

    public function post(){
        return $this->belongsTo('App\PostModel');
    }
}
