<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'pages';
    protected $fillable = ['title','permalink','description','keywords','content','position','status','displayOrder'];
}
