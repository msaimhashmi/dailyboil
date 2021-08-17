<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnalyticsSettings extends Model
{
    protected $table = 'analytics-settings';
    protected $fillable = ['status','code'];
}
