<div class='form-group'>
 {!! Form::label('first_name', 'Name:') !!}
 {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
 {!! Form::label('group_id', 'Group:') !!}
 {!! Form::text('group_id', null, ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
 {!! Form::submit($submitButtonText, ['class' => 'btn btn-lg btn-danger form-control']) !!}
</div>
