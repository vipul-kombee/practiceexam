
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Role Management</h2>
    <a href="{{ route('roles.create') }}" class="btn btn-primary">Create Role</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    <a href="{{ route('roles.edit', $role) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('roles.destroy', $role) }}" method="POST" style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
