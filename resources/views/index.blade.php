<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>My PHP Template</title>
</head>

<body>
    <h1>Hello, this is an index blade template</h1>
    @isset($name)
    <p>The name is: {{ $name }}</p>
    @endisset
</body>

</html>