<!DOCTYPE html>
<html>

<head>
    <title>Laravel 8 Send Email Example</title>
</head>

<body>
    Nombre: {{ $data->name }}
    Email: {{ $data->email }}
    <h1>Subject: {{ $data->subject }}</h1>
    <p>Message: {{ $data->message }}</p>
</body>


</html>