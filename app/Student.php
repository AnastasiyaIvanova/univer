<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = array('first_name','group_id');

    public function groups()
    {
       return $this->belongsTo(Group::class);
    }

    public function marks()
    {
       return $this->hasMany(Mark::class);
    }
}
