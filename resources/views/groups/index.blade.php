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
                              <th>Группа</th>
                              <th>Описание</th>
                              <th>Математика</th>
                              <th>Русский</th>
                              <th>История</th>
                              <th>Успеваемость</th>
                              <th>&nbsp;</th>
                          </thead>
                          <tbody>
                              @foreach ($groups as $group)
                                  <tr>
                                      <td class="table-text">
                                          <div>
                                              <a href="{{route('groups.show',$group->id)}}">{{ $group->name }}</a>
                                          </div>
                                      </td>
                                      <td class="table-text"><div>{{ $group->description }}</div></td>
                                      <td class="table-text"><div>{{$group->avg(1)}}</div></td>
                                      <td class="table-text"><div>{{$group->avg(2)}}</div></td>
                                      <td class="table-text"><div>{{$group->avg(3)}}</div></td>
                                      <td class="table-text"><div>{{$score[$group->id]}}</div></td>
                                      <!-- Group Delete Button -->
                                      <td>
                                          <form action="{{route('groups.destroy', $group->id)}}" method="POST">
                                              @csrf
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
            @csrf

            <!-- Group Name -->
            <div class="form-task">
                <label for="group-name" class="col-sm-3 control-label">Группа</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="group-name" class="form-control">
                </div>
            </div>
            <div class="form-task">
                <label for="group-description" class="col-sm-3 control-label">Описание</label>

                <div class="col-sm-6">
                    <input type="text" name="description" id="group-description" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-task">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Добавить группу
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
