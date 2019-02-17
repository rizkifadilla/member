<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class membership extends Model
{
    //
    protected $table = 'memberships';
    protected $filelable = ['id','type'];
}
