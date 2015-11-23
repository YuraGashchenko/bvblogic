<html>
<head>
    <title>Index</title>
</head>
<body>
<p><a href="/user/creat">Create User</a></p>
@foreach ($users as $user)
    <h3>{{ $user->first_name }} {{ $user->last_name }}</h3>
    <p>{{ $user->address}}</p>
    <p>
        <a href="{{ route('user.show', $user->id) }}" class="btn btn-info">View User</a>
        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit User</a>
    </p>
    <hr>
@endforeach
</body>
</html>
