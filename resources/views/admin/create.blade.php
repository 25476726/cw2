<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin create</title>
</head>
<body>
<h1>admin create</h1>

{!! Form::open(array('action' => 'AdminController@store', 'id' => 'answerquestionnaire')) !!}
        {{ csrf_field() }}
    <div class="row large-12 columns">
        {!! Form::label('q1', 'Question 1:') !!}
        {!! Form::text('q1', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::label('q2', 'Question 2:') !!}
        {!! Form::textarea('q2', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::label('q3', 'Question 3:') !!}
        {!! Form::text('q3', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
    {!! Form::label('q4', 'Question 4:') !!}
    {!! Form::select('category[]', $cats, null,['class' => 'large-8 columns', 'multiple']) !!}
    </div>


    <div class="row large-4 columns">
        {!! Form::submit('Answers', ['class' => 'button']) !!}
    </div>
{!! Form::close() !!}

</body>
</html>