<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
  protected $fillable = array('mark','student_id','subject_id');

  public function students()
  {
     return $this->belongsTo(Student::class);
  }

  public function subjects()
  {
     return $this->belongsTo(Subject::class);
  }
}
