<div class='form-group'>
 {!! Form::label('second_name', 'Фамилия:') !!}
 {!! Form::text('second_name', null, ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
 {!! Form::label('first_name', 'Имя:') !!}
 {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
 {!! Form::label('middle_name', 'Отчество:') !!}
 {!! Form::text('middle_name', null, ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
 {!! Form::label('day_of_birth', 'Дата рождения:') !!}
 {!! Form::date('day_of_birth', null, ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
 {!! Form::label('group_id', 'Группа:') !!}
 {!! Form::select('group_id', $group, null, ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
 {!! Form::submit($submitButtonText, ['class' => 'btn btn-lg btn-danger form-control']) !!}
</div>
