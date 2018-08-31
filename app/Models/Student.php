<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['first_name','second_name','middle_name','group_id','day_of_birth'];

    public function groups()
    {
        return $this->belongsTo(Group::class);
    }

    public function marks()
    {
        return $this->hasMany(Mark::class);
    }

    public function color()
    {
        $avg = round($this->marks->avg('mark'), 1);
        if ($avg == 5) {
            $style = "success";
        } elseif ($avg >= 4.5) {
            $style="warning";
        } elseif ($avg <=3 && $avg <> 0) {
            $style = "danger";
        } else {
            $style = "default";
        }
          return $style;
    }

//Оценка студента по конкретному предмету
    public function mark($id)
    {
        $stud_mark=null;
        if (!empty($this->marks->where('subject_id', $id)->first()->mark)) {
            $stud_mark = $this->marks->where('subject_id', $id)->first()->mark;
        }
        //dd($stud_mark=$this->marks->where('subject_id', $id)->first()->mark);
        return $stud_mark;
    }
}
