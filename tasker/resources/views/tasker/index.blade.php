@extends('tasker.master');
@section('title','Items To Do');
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Target Completion</th>
                  <th>Start</th>
                  <th>Completion</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                @foreach($tasklist as $task)
                <tr>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->description  }}</td>
                    <td>{{ $task->target }}</td>
                    <td>{{ $task->start }}</td>
                    <td>{{ $task->completion }}</td>
                    <td>
                        @if(!$task->isStarted)
                        <a href="{{ route('tasker.setStart',['id'=>$task->id]) }}" class="btn btn-info">Start</a>
                        @elseif($task->isStarted && !$task->isFinished)
                        <a href="{{ route('tasker.setFinish',['id'=>$task->id]) }}" class="btn btn-info">Finish</a>
                        @else
                        <i>Completed</i>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('tasker.edit',['id'=>$task->id]) }}" class="btn btn-info">Edit</a><br>
                        <a href="{{ route('tasker.destroy',['id'=>$task->id]) }}" class="btn btn-info">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
