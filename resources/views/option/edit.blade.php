<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit {{ $option->option_id }}</title>
    <link rel="stylesheet" href="/css/foundation.css" />
</head>
<body>
<header>
    <nav>
            <button><a href="http://127.0.0.1:8000/">Home</a></button>
            <button><a href="http://127.0.0.1:8000/option">Back to all Options</a></button>
    </nav>
</header>
<h1>Edit - {{ $option->option_id }}</h1>


        <!-- form goes here -->
{!! Form::model($option, ['action' => 'OptionController@update', 'method' => 'PATCH', 'url' => '/option/' , $option->option_id]) !!}

<div>
    {!! Form::label('option_name', 'Name:') !!}
    {!! Form::text('option_name', null) !!}
</div>

<div>
    {!! Form::label('question_assigned_to', 'Question that this Option is assigned to:') !!}
    {!! Form::text('question_assigned_to', null) !!}
</div>

<div>
    {!! Form::submit('Update Option') !!}
</div>


{!! Form::close() !!}
</body>
</html>