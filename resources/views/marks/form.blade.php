<div class='form-group'>
 {!! Form::label('math', 'Математика:') !!}
 {!! Form::select('math', ['', '1', '2', '3', '4', '5'], $student->mark(1), ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
 {!! Form::submit($submitButtonText, ['class' => 'btn btn-lg btn-danger form-control']) !!}
</div>
<div class='form-group'>
 {!! Form::label('rus', 'Русский:') !!}
 {!! Form::select('rus', ['', '1', '2', '3', '4', '5'], $student->mark(2), ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
 {!! Form::submit($submitButtonText, ['class' => 'btn btn-lg btn-danger form-control']) !!}
</div>
<div class='form-group'>
 {!! Form::label('history', 'История:') !!}
 {!! Form::select('history', ['', '1', '2', '3', '4', '5'], $student->mark(3), ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
 {!! Form::submit($submitButtonText, ['class' => 'btn btn-lg btn-danger form-control']) !!}
</div>
