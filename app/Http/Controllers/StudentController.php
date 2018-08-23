<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Subject;
use App\Mark;
use App\Group;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();

        return view('student.index',['students'=>$students]);
    }

    public function filter($id)
    {
        $subjects = Subject::all();
        // $score=Mark::with(['students' => function ($query) use($id) {
        //     $query->where('group_id',$id);
        // }])->mark;

        $students = Student::all()->where('group_id',$id);
        $score=Mark::with('students')->where('subject_id',1)->first()->mark;
        //How to use!!!!!!!
        // @foreach($students->marks as $mark)
        // <td class="table-text"><div>{{ $mark->mark }}</div></td>
        // @endforeach

        $students=Student::with('marks','groups')->where('group_id',$id)->get();


        // $group = Group::with('students')->get();//???????????
        // $group->where('id', 1)->students;
        //$groups = Group::with('students','mark')->get();

        //$marks=Mark::with('students','groups')->get();


        return view('students.index', compact('score','students','subjects','groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create(array(
            'name' => $request->name,
            'group_id' => $request->group_id
        ));
            return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::where('id',$id)->delete();
        return redirect('/students');
    }
}
