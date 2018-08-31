<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mark;
use App\Models\Student;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $marks = Mark::all();
        // $students = Student::all();
        // return view('marks.index', compact('marks', 'students'));
        //['marks'=>$marks]);
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
        Mark::create(array(
            'mark' => $request->mark,
            'student_id' => $request->student_id,
            'subject_id' => $request->subject_id
        ));
            return redirect('/marks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marks = Mark::where('student_id', $id);
        $student = Student::find($id);
        //dd($student);
        return view('marks.index', compact('marks', 'student'));
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
        $one = $request->input('math');
        $two = $request->input('rus');
        $three = $request->input('history');
        //dd($request->math);
        if (isset($one)) {
            Mark::create(array(
            'mark' => $request->math,
            'student_id' => $id,
            'subject_id' => 1
            ));
        }
        if (isset($two)) {
            Mark::create(array(
            'mark' => $request->rus,
            'student_id' => $id,
            'subject_id' => 2
            ));
        }
        if (isset($three)) {
            Mark::create(array(
            'mark' => $request->history,
            'student_id' => $id,
            'subject_id' => 3
            ));
        }
        return redirect()->action(
            'MarkController@show',
            ['id' => $id]
        );

    //         $student = Student::findOrFail($id);
    // $input = request()->all();
    // $student->update($input);
    // return redirect()->action(
    //     'StudentController@show',
    //     ['id' => $id]
    // );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mark::where('id', $id)->delete();
        return redirect('/marks');
    }
}
