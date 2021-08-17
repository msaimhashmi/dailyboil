<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdsSettings extends Model
{
    protected $table = 'ads-settings';
    protected $fillable = ['ad728x90Status','ad728x90ResponsiveStatus','ad728x90','ad250x250Status','ad250x250ResponsiveStatu','ad250x250','popAdStatus','popAd','popAdFrequency','displayOnHomePage','displayOnDynamicPages','displayOnContactPage'];
}
