<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
</head>
<body>
    <h1>Users</h1>

    @foreach($users as $user)
    <p> {{$user->name}}
    <a href="/delete/{{$user->id}}">delete</a>
    <a href="/edit/{{$user->id}}">edit</a>
    </p>
    @endforeach

<form action="/store" method="POST">
@csrf
<input type="text" name="username">
<input type="submit" value="submit">
</form>

</body>
</html>