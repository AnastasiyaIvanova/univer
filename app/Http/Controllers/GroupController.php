<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Student;
use App\Models\Subject;
use App\Http\Requests;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *2
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $score=array();
        $groups = Group::all();
        foreach ($groups as $group) {
            $score[$group->id]=round(($group->avg(1)+$group->avg(2)+$group->avg(3))/3, 1);
        }

        return view('groups.index', compact('groups', 'score'));
        //['groups'=>$groups]);
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
        Group::create($request->all());
            return redirect('/groups');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $subjects = Subject::all();
          $students=Student::where('group_id', $id)->with('marks', 'groups')->get();

          return view('groups.show', compact('students', 'subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Group::create([
               'name' => $request->name,
           ]);

          return redirect('/groups');
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
        Group::where('id', $id)->delete();
        return redirect('/groups');
    }
}
