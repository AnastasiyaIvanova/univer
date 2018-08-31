<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name', 'description'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function avg($id)
    {
        $average = null;
        foreach ($this->students as $student) {
            if (!empty($student->mark($id))) {
                $average=$average+$student->mark($id);
            }
        }
        $average=$average/count($this->students);
        return round($average, 1);
    }
}
