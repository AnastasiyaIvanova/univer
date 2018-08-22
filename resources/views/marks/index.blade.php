@extends('layout.app')

@section('content')

    <div class="container">
        <div class="com-sm-offset-2 col-sm-8">
            <!-- Marks -->
            @if (count($marks) > 0)
                <div class="panel panel-default">


                  <div class="panel-body">
                      <table class="table table-striped task-table">
                          <thead>
                              <th>Mark</th>
                              <th>Student</th>
                              <th>Subject</th>
                              <th>&nbsp;</th>
                          </thead>
                          <tbody>
                              @foreach ($marks as $mark)
                                  <tr>
                                      <td class="table-text"><div>{{ $mark->mark }}</div></td>
                                      <td class="table-text"><div>{{ $mark->student_id }}</div></td>
                                      <td class="table-text"><div>{{ $mark->subject_id }}</div></td>

                                      <!-- Mark Delete Button -->
                                      <td>
                                          <form action="{{route('marks.destroy', $mark->id)}}" method="POST">
                                              {{ csrf_field() }}
                                              {{ method_field('DELETE') }}
                                              <input type="hidden" name="_method" value="DELETE">

                                              <button type="submit" id="delete-task-{{ $mark->id }}" class="btn btn-danger">
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



        <!-- New Mark Form -->
        <form action="{{ route('marks.store') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Mark Name -->
            <div class="form-group">
                <label for="mark" class="col-sm-3 control-label">Mark</label>
                <div class="col-sm-6">
                    <input type="text" name="mark" id="mark" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="student" class="col-sm-3 control-label">Student</label>
                <div class="col-sm-6">
                    <input type="text" name="student_id" id="student" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="subject" class="col-sm-3 control-label">Subject</label>
                <div class="col-sm-6">
                    <input type="text" name="subject_id" id="subject" class="form-control">
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
