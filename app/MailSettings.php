<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailSettings extends Model
{
    protected $table = 'mail-settings';
    protected $fillable = ['smtpStatus','host','port','username','password','contactEmail'];
}
