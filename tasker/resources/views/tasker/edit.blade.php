@extends('tasker.master');
@section('title','Edit Task')
@section('content')
    <div class="row mt-5">
        <div class="col-sm-8 offset-sm-2">
            <form action="{{ route('tasker.update') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $task->id }}">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" size=40 class="form-control" required value="{{ $task->name }}">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" rows=4 cols=50 class="form-control">{{ $task->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="target">Target:</label>
                    <input type="text" name="target" id="target" class="form-control" required value="{{ $task->target }}">
                </div>
                <div class="form-group">
                    <label for="start">Start:</label>
                    <input type="text" name="start" id="start" class="form-control" required value="{{ $task->start }}">
                </div>
                <div class="form-group">
                    <label for="finish">Finish:</label>
                    <input type="text" name="finish" id="finish" class="form-control" required value="{{ $task->finish }}">
                </div>
                <div class="form-group">
                    <input type="checkbox" name="isStarted" id="isStarted" class="form-control" value="TRUE" {{ ($task->isStarted ? 'CHECKED' : '' ) }}>
                    <label for="isStarted">Is Started:</label>
                    <input type="checkbox" name="isFinished" id="isFinished" class="form-control" value="TRUE" {{ ($task->isFinished ? 'CHECKED' : '' ) }}>
                    <label for="isFinished">Is Finished: </label>
                </div>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
