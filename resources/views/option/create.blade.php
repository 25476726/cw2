<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Option</title>
    <link rel="stylesheet" href="/css/foundation.css" />
</head>
<body>
<h1>Add Option</h1>

{!! Form::open(array('action' => 'OptionController@store', 'id' => 'createoption')) !!}
        {{ csrf_field() }}
    <div class="row large-12 columns">
    {!! Form::label('option_id', 'ID:') !!}
    {!! Form::text('option_id', null, ['class' => 'large-8 columns']) !!}
    </div>
    <div class="row large-12 columns">
        {!! Form::label('option_name', 'Title:') !!}
        {!! Form::text('option_name', null, ['class' => 'large-8 columns']) !!}
    </div>


    <div class="row large-4 columns">
        {!! Form::submit('Add Option', ['class' => 'button']) !!}
    </div>
{!! Form::close() !!}

</body>
</html>