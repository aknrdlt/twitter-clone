<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new post</title>
</head>
<body>
    <form id="form" method="POST" action="{{ route('add-post') }}">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="body" placeholder="Body">
        <button type="submit">Create</button>
    </form>
</body> 
</html>