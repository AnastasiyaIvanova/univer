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
                              @foreach ($students as $student)
                                  <tr class="table table-{{ $student->color()}}">
                                      <td class="table-text"><div>{{ $student->second_name }} {{ $student->first_name }} {{ $student->middle_name }}</div></td>
                                      <td class="table-text"><div>{{ Carbon\Carbon::parse($student->day_of_birth)->format('d/m/Y') }}</div></td>
                                      <td class="table-text"><div>{{ $student->group_id }}</div></td>
                                      @foreach ($subjects as $subject)
                                      <td class="table-text"><div>{{ $student->mark($subject->id) }}</div></td>
                                      @endforeach
                                      <td class="table-text"><div>{{ round($student->marks->avg('mark')) }}</div></td>
                                      <!-- Student Delete Button -->
                                      <td>
                                          <form action="{{route('students.show', $student->id)}}" method="GET">
                                              <button type="submit" id="show-task-{{ $student->id }}" class="btn btn-danger">
                                                  <i class="fa fa-btn fa-trash"></i>Анкета
                                              </button>
                                          </form>
                                      </td>
                                      <td>
                                          <form action="{{route('students.destroy', $student->id)}}" method="POST">
                                              @csrf
                                              {{ method_field('DELETE') }}
                                              <input type="hidden" name="_method" value="DELETE">

                                              <button type="submit" id="delete-task-{{ $student->id }}" class="btn btn-danger">
                                                  <i class="fa fa-btn fa-trash"></i>Удалить
                                              </button>
                                          </form>
                                      </td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>

    </div>
</div>
@endsection
