<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table class="table">
    <a class="btn btn-primary" href={{route("task.create")}}>ajouter</a>
    <thead>
        <tr>
            <th>id</th>
            <th>Tasks</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($task as $item)
        <tr>
            <td>{{$item->id}} </td>
            <td>{{$item->Task}} </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
