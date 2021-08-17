<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generalsettings extends Model
{
        protected $table = 'general-settings';
    	protected $fillable = ['title','description','keywords','coverImage','backgroundImage','logo','logoLight','favicon','allowDirectLink','https','www','version'];
}
