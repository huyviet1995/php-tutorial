<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>My PHP Template</title>
</head>

<body>
    <h1>Hello, this is an index blade template</h1>
    @forelse ($tasks as $task)
        <div class="">
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
    <p>There are no tasks</p>
    @endforelse
</body>

</html>