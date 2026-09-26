@extends('layouts.app')

@section('title', 'My Tasks')

@section('content')
    <h1>Personal Task Manager</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">+ Add Task</a>

    <table>
        <thead>
            <tr>
                <th>Task</th>
                <th>Description</th>
                <th>Due Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tasks as $task)
                <tr>
                    <td>{{ $task->task_name }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->due_date ? $task->due_date->format('M d, Y') : '—' }}</td>
                    <td class="status-{{ strtolower($task->status) }}">{{ $task->status }}</td>
                    <td>
                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-edit">Edit</a>

                        <form action="{{ route('tasks.toggleStatus', $task) }}" method="POST" class="inline">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-toggle">
                                Mark {{ $task->status === 'Completed' ? 'Pending' : 'Completed' }}
                            </button>
                        </form>

                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline" onsubmit="return confirm('Delete this task?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">No tasks yet. Add your first one above.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
