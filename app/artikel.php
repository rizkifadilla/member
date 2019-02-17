<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    //
    protected $table = 'artikels';
    protected $filelable = ['title','description','category','content','foto'];
}
