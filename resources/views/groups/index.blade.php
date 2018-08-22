@extends('layout.app')

@section('content')

    <div class="container">
        <div class="com-sm-offset-2 col-sm-8">
            <!-- Groups -->
            @if (count($groups) > 0)
                <div class="panel panel-default">


                  <div class="panel-body">
                      <table class="table table-striped task-table">
                          <thead>
                              <th>Groups</th>
                              <th>&nbsp;</th>
                          </thead>
                          <tbody>
                              @foreach ($groups as $group)
                                  <tr>
                                      <td class="table-text">
                                          <div>
                                              <a href="{{url('student/'.$group->id)}}">{{ $group->name }}</a>
                                          </div>
                                      </td>

                                      <!-- Group Delete Button -->
                                      <td>
                                          <form action="{{route('groups.destroy', $group->id)}}" method="POST">
                                              {{ csrf_field() }}
                                              {{ method_field('DELETE') }}
                                              <input type="hidden" name="_method" value="DELETE">

                                              <button type="submit" id="delete-task-{{ $group->id }}" class="btn btn-danger">
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



        <!-- New Group Form -->
        <form action="{{ route('groups.store') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Group Name -->
            <div class="form-task">
                <label for="group-name" class="col-sm-3 control-label">Group</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="group-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-task">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Group
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
