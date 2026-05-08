<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h1>List of Users</h1>
    <a href="{{ route('students.create') }}">Add New User</a>
    <ul>
        @foreach ($students as $student)
        <li>{{ $student->name }} ({{ $student->email }})</li>
        @endforeach
    </ul>
</body>
</html>