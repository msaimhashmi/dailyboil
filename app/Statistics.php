<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    protected $table = 'statistics';
    protected $fillable = ['title','slug','status','meta_description','meta_keyword'];
}
