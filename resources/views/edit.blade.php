<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
</head>
<body>
    <h1>Edit Username</h1>
    <form action="/update/{{$user->id}}" method="POST">
@csrf
<input type="text" name="username" value="{{$user->name}}">
<input type="submit" value="submit">
</form>

</body>
</html>