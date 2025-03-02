@extends('layouts.app')

@section('content')
    <h2>User: {{ $user->first_name }} {{ $user->last_name }}</h2>
    
    <h3>Assign Role</h3>
    <form action="{{ route('users.assignRole', $user) }}" method="POST">
        @csrf
        <select name="role_id">
            @foreach ($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select>
        <button type="submit">Assign Role</button>
    </form>

    <h3>Assigned Roles</h3>
    <ul>
        @foreach ($user->roles as $role)
            <li>{{ $role->name }}
                <form action="{{ route('users.removeRole', [$user, $role]) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remove</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
