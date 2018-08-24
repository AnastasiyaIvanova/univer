@extends('layout.app')
@section('content')

<div class='col-md-6 col-md-offset-3'>
  <h1>Edit</h1>
  <hr>
    {!! Form::model($student, ['method' => 'PATCH', 'action' => ['StudentController@update',$student->id]]) !!}
    @include('students.form', ['submitButtonText' => 'Edit'])
    {!! Form::close() !!}
</div>
@stop
