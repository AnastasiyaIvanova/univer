@extends('layout.app')

@section('content')

    <div class="container">
        <div class="com-sm-offset-2 col-sm-8">
            <!-- Students -->
            @if (count($students) > 0)
                <div class="panel panel-default">
                  <div class="panel-body">
                      <table class="table task-table">
                          <thead>
                              <th>Student</th>
                              <th>Group</th>
                              @foreach ($subjects as $subject)
                              <th>{{$subject->name}}</th>
                              @endforeach
                              <th>Average</th>
                              <th>&nbsp;</th>
                          </thead>
                          <tbody>
                              @foreach ($students as $student)
                                  <tr class="table-success">
                                      <td class="table-text"><div>{{ $student->first_name }}</div></td>
                                      <td class="table-text"><div>{{ $student->group_id }}</div></td>
                                      @if (count($student->marks) > 0)
                                      @foreach ($subjects as $subject)
                                      @if(!empty($student->marks->where('subject_id',$subject->id)->first()->mark))
                                      <td class="table-text"><div>{{ $student->marks->where('subject_id',$subject->id)->first()->mark }}</div></td>
                                      @else <td class="table-text"><div>&nbsp;</div></td>
                                      @endif
                                      @endforeach
                                      <td class="table-text"><div>{{ $student->marks->avg('mark') }}</div></td>
                                      @endif
                                      @if ($student->marks->avg('mark')<=4.5)
                                      echo '<table class="yellow">';
                                          @endif
                                      <!-- Student Delete Button -->
                                      <td>
                                          <form action="{{route('students.destroy', $student->id)}}" method="POST">
                                              {{ csrf_field() }}
                                              {{ method_field('DELETE') }}
                                              <input type="hidden" name="_method" value="DELETE">

                                              <button type="submit" id="delete-task-{{ $student->id }}" class="btn btn-danger">
                                                  <i class="fa fa-btn fa-trash"></i>Delete
                                              </button>
                                          </form>
                                      </td>
                                      <td>
                                          <form action="{{route('students.edit', $student->id)}}" method="GET">
                                              <button type="submit" id="edit-task-{{ $student->id }}" class="btn btn-danger">
                                                  <i class="fa fa-btn fa-trash"></i>Edit
                                              </button>
                                          </form>
                                      </td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          @endif

          <form action="{{route('students.create', $student->id)}}" method="GET">
              <button type="submit" id="create-task-{{ $student->id }}" class="btn btn-danger">
                  <i class="fa fa-btn fa-trash"></i>Add
              </button>
          </form>

    </div>
</div>
@endsection
