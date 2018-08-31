@extends('layout.app')

@section('content')

    <div class="container">
        <div class="com-sm-offset-2 col-sm-8">
            <!-- Students -->
                <div class="panel panel-default">
                  <div class="panel-body">
                      <table class="table table-hover">
                          <thead>
                              <th>Студент</th>
                              <th>Дата рождения</th>
                              <th>Группа</th>
                              <th>Математика</th>
                              <th>Русский</th>
                              <th>История</th>
                              <th>Успеваемость</th>
                              <th>&nbsp;</th>
                              <th>&nbsp;</th>
                          </thead>
                          <tbody>
                              <tr class="table table-{{ $student->color()}}">
                                  <td class="table-text"><div>{{ $student->second_name }} {{ $student->first_name }} {{ $student->middle_name }}</div></td>
                                  @if (!empty($student->day_of_birth))
                                  <td class="table-text"><div>{{ Carbon\Carbon::parse($student->day_of_birth)->format('d/m/Y') }}</div></td>
                                  @else <td class="table-text"><div>&nbsp;</div></td>
                                  @endif
                                  <td class="table-text"><div>{{ $student->group_id }}</div></td>
                                  @foreach ($subjects as $subject)
                                  <td class="table-text"><div>{{ $student->mark($subject->id) }}</div></td>
                                  @endforeach
                                  <td class="table-text"><div>{{ round($student->marks->avg('mark'), 1) }}</div></td>

                                      <!-- Student Delete Button -->
                                  <td>
                                      <form action="{{route('students.edit', $student->id)}}" method="GET">
                                          <button type="submit" id="edit-task-{{ $student->id }}" class="btn btn-danger">
                                              <i class="fa fa-btn fa-trash"></i>Изменить
                                          </button>
                                      </form>
                                  </td>
                                  <td>
                                      <form action="{{route('marks.show', $student->id)}}" method="GET">
                                          <button type="submit" id="show-task-{{ $student->id }}" class="btn btn-danger">
                                              <i class="fa fa-btn fa-trash"></i>Оценки
                                          </button>
                                      </form>
                                  </td>
                                  </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
    </div>
</div>
@endsection
