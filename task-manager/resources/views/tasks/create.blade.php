@extends('layout')

@section('content')
<div class="card shadow-sm max-w-md mx-auto" style="max-width: 600px;">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Add Task</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Task Name</label>
                <input type="text" name="task_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label>Due_Date</label>
                <input type="date" name="due_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Save Task</button>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection