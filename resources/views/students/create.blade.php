@extends('layout.app')
@section('content')
<div class='col-md-6 col-md-offset-3'>
  <h1>Новый студент</h1>
<hr>

  {!! Form::model($group, ['action' => 'StudentController@store']) !!}
   @include('students.form', ['submitButtonText' => 'Добавить'])
  {!! Form::close() !!}
 </div>
@stop
