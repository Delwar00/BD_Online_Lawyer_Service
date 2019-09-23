<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class freeConsult extends Model
{
  protected $fillable = [
    'personal_info_id','user_id','message',
    ];

}
