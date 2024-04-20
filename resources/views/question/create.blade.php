<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Question</title>
    <link rel="stylesheet" href="/css/foundation.css" />
</head>
<body>
<h1>Add Question</h1>

{!! Form::open(array('action' => 'QuestionController@store', 'id' => 'createquestion')) !!}
        {{ csrf_field() }}
    <div class="row large-12 columns">
    {!! Form::label('question_id', 'ID:') !!}
    {!! Form::text('question_id', null, ['class' => 'large-8 columns']) !!}
    </div>
    <div class="row large-12 columns">
        {!! Form::label('question_name', 'Title:') !!}
        {!! Form::text('question_name', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::label('question_description', 'Detail:') !!}
        {!! Form::textarea('question_description', null, ['class' => 'large-8 columns']) !!}
    </div>


    <div class="row large-4 columns">
        {!! Form::submit('Add Question', ['class' => 'button']) !!}
    </div>
{!! Form::close() !!}

</body>
</html>