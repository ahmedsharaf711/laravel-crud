<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['first-name' , 'last-name' , 'email' , 'phone'];
    protected $hidden = ['created_at' , 'updated_at'];
}
