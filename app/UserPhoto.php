<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPhoto extends Model
{
    protected $table = 'user_photos';

    protected $uploads = '/images/user_photos/';

    protected $fillable = ['file'];

    public function getFileAttribute($photo){

        return $this->uploads . $photo;

    }
}
