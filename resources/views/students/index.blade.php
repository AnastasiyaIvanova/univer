@extends('layout.app')

@section('content')

    <div class="container">
        <div class="com-sm-offset-2 col-sm-8">
            <!-- Students -->
            @if (count($students) > 0)
                <div class="panel panel-default">


                  <div class="panel-body">
                      <table class="table table-striped task-table">
                          <thead>
                              <th>Student</th>
                              <th>Group</th>
                              @foreach ($subjects as $subject)
                              <th>{{$subject->name}}</th>
                              @endforeach
                              <th>&nbsp;</th>
                          </thead>
                          <tbody>
                              @foreach ($students as $student)
                                  <tr>
                                      <td class="table-text"><div>{{ $student->name }}</div></td>
                                      <td class="table-text"><div>{{ $student->group_id }}</div></td>

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
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          @endif



        <!-- New Student Form -->
        <form action="{{ route('students.store') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Student Name -->
            <div class="form-group">
                <label for="student-name" class="col-sm-3 control-label">Student-name</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="student-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="group-id" class="col-sm-3 control-label">Student-group</label>
                <div class="col-sm-6">
                    <input type="text" name="group_id" id="group-id" class="form-control">
                </div>
            </div>



            <!-- Add Task Button -->
            <div class="form-task">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Student
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
