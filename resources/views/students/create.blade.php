@extends('layout.app')
@section('content')
<div class='col-md-6 col-md-offset-3'>
  <h1>Add New</h1>
<hr>

  {!! Form::open(['action' => 'StudentController@store']) !!}
   @include('students.form', ['submitButtonText' => 'Add'])
  {!! Form::close() !!}
 </div>
@stop
