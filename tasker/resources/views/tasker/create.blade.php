@extends('tasker.master');
@section('title','Define Task')
@section('content')
    <div class="row mt-5">
        <div class="col-sm-8 offset-sm-2">
            <form action="{{ route('tasker.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" size=40 class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" rows=4 cols=50 class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="target">Target:</label>
                    <input type="text" name="target" id="target" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="start">Start:</label>
                    <input type="text" name="start" id="start" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="finish">Finish:</label>
                    <input type="text" name="finish" id="finish" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
