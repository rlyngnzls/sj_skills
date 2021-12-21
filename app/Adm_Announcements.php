<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adm_Announcements extends Model
{
    protected $table = 'announcements';
    protected $fillable = [
        'filename', 'title', 'contents', 'tag'
    ];
}
