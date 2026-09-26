@extends('layout')

@section('content')
<div class="card shadow-sm max-w-md mx-auto" style="max-width: 600px;">
    <div class="card-header bg-info text-white">
        <h4 class="mb-0">Edit Task</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Task Name</label>
                <input type="text" name="task_name" class="form-control" value="{{ $task->task_name }}" required>
            </div>
            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="3">{{ $task->description }}</textarea>
            </div>
            <div class="mb-3">
                <label>Date</label>
                <input type="date" name="due_date" class="form-control" value="{{ $task->due_date }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Task</button>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection