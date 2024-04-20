<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit {{ $user->name }}</title>
    <link rel="stylesheet" href="/css/foundation.css" />
</head>
<body>
<h1>Edit - {{ $user->name }}</h1>


        <!-- form goes here -->
{!! Form::model($user, ['method' => 'PATCH', 'url' => '/users/' . $user->id]) !!}

<div>
    {!! Form::label('name', 'Username:') !!}
    {!! Form::text('name', null) !!}
</div>

<div>
    {!! Form::label('email', 'Email Address:') !!}
    {!! Form::textarea('email', null) !!}
</div>

<div>
    {!! Form::submit('Update User') !!}
</div>


{!! Form::close() !!}
</body>
</html>