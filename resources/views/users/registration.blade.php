<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>User Registration Details</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .header { text-align: center; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="header">
        <h2>User Registration Details</h2>
    </div>
    
    <table>
        <tr>
            <th>First Name</th>
            <td>{{ $user->first_name }}</td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td>{{ $user->last_name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>Contact Number</th>
            <td>{{ $user->contact_number }}</td>
        </tr>
        <tr>
            <th>Postcode</th>
            <td>{{ $user->postcode }}</td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>{{ ucfirst($user->gender) }}</td>
        </tr>
        <tr>
            <th>State</th>
            <td>{{ $user->state->name ?? 'N/A' }}</td>
        </tr>
        <tr>
            <th>City</th>
            <td>{{ $user->city->name ?? 'N/A' }}</td>
        </tr>
        <tr>
            <th>Roles</th>
            <td>
                @foreach(json_decode($user->roles, true) ?? [] as $role)
                    {{ $role }}@if(!$loop->last), @endif
                @endforeach
            </td>
        </tr>
        <tr>
            <th>Hobbies</th>
            <td>
                @foreach(json_decode($user->hobbies, true) ?? [] as $hobby)
                    {{ $hobby }}@if(!$loop->last), @endif
                @endforeach
            </td>
        </tr>
        <tr>
            <th>Uploaded Files</th>
            <td>
                @if($user->uploaded_files)
                    @foreach(json_decode($user->uploaded_files, true) as $file)
                        <a href="{{ asset('storage/' . $file) }}">{{ basename($file) }}</a><br>
                    @endforeach
                @else
                    N/A
                @endif
            </td>
        </tr>
    </table>
</body>
</html>
