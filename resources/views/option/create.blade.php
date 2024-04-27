<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Option</title>
    <link rel="stylesheet" href="/css/foundation.css" />
</head>
<body>
<header>
    <nav>
            <button><a href="http://127.0.0.1:8000/">Home</a></button>
            <button><a href="http://127.0.0.1:8000/option">Back to all Options</a></button>
    </nav>
</header>
<h1>Add Option</h1>

{!! Form::open(array('action' => 'OptionController@store', 'id' => 'createoption')) !!}
        {{ csrf_field() }}
    <div class="row large-12 columns">
        {!! Form::label('option_name', 'Title:') !!}
        {!! Form::text('option_name', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::label('question_assigned_to', 'Question that this Option is assigned to:') !!}
        {!! Form::text('question_assigned_to', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-4 columns">
        {!! Form::submit('Add Option', ['class' => 'button']) !!}
    </div>
{!! Form::close() !!}

</body>
</html>