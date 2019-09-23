<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lawyerPersonalInfo extends Model
{
    protected $fillable=['user-id','l_name','l_birth','profile_photo','gender','religion',
    'maritual_status','details','highest_degree','price','qualifications'];

}
