@extends('layout.app')
@section('content')

<div class='col-md-6 col-md-offset-3'>
  <h1>Edit</h1>
  <hr>
    {!! Form::model($marks, ['method' => 'PATCH', 'action' => ['MarkController@update',$student->id]]) !!}
    @include('marks.form', ['submitButtonText' => 'Edit'])
    {!! Form::close() !!}
</div>
@stop
