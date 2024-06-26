<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create User</title>
    <link rel="stylesheet" href="/css/foundation.css" />
</head>
<body>
<header>
    <nav>
            <button><a href="http://127.0.0.1:8000/">Home</a></button>
            <button><a href="http://127.0.0.1:8000/users">Back to all Users</a></button>
    </nav>
</header>
<h1>Add User</h1>

{!! Form::open(array('action' => 'UserController@store', 'id' => 'createuser')) !!}
        {{ csrf_field() }}
    <div class="row large-12 columns">
        {!! Form::label('user_name', 'Name:') !!}
        {!! Form::text('user_name', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::textarea('email', null, ['class' => 'large-8 columns']) !!}
    </div>


    <div class="row large-4 columns">
        {!! Form::submit('Add User', ['class' => 'button']) !!}
    </div>
{!! Form::close() !!}

</body>
</html>