
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Role</h2>
    <form action="{{ route('roles.update', $role) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group">
            <label>Role Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $role->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
</div>
@endsection
