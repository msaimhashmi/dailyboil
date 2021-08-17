<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialSharing extends Model
{
    protected $table = 'social-sharing';
    protected $fillable = ['status','facebookSharing','facebookPageName','googleplusSharing','googleplusPageId','twitterSharing','twitterTweetText','linkedinSharing'];
}
