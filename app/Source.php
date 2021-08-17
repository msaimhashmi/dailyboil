<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    protected $table = 'source';
    protected $fillable = ['name','website','link_cache_time','icon','status'];
}
