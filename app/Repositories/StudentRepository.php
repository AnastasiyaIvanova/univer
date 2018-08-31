<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository
{
    public function forStudent(Student $student)
    {
        return $student->marks()
                       ->get();
    }
}
