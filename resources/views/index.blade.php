<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>


        h1 {
            text-align: center;
            text-transform: uppercase;
            color: #4CAF50;
        }

        a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            text-align: center;
        }
        .content{
            text-align: center;
        }
    </style>
</head>
<body>
<div>
    <div>
        <div>
            <h1>Task Management</h1>
        </div>
        <div class="content">
            <a href="/add">Add new task</a>
            <a href="{{ route('tasks.index') }}">Tasks list</a>
        </div>
    </div>
</div>
@if(!isset($tasks))
<h5>Dữ liệu không tồn tại!</h5>

    @else
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Created</th>
        <th scope="col">Image</th>
    </tr>

    </thead>
    <tbody>
    @foreach($tasks as $key => $task)
        <tr>
            <th scope="row">{{ ++$key }}</th>
            <th>{{ $task->title }}</th>
            <th>{{ $task->content }}</th>
            <th>{{ $task->created }}</th>
            <th><img src="{{ asset('storage/images/' . $task->image) }}" alt="" style="width: 150px"></th>
        </tr>
    @endforeach
    </tbody>
</table>

@endif
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
