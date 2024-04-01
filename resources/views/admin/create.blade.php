<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Questionnaire</title>
</head>
<body>
<h1>Questionnaire</h1>

{!! Form::open(array('action' => 'AdminController@store', 'id' => 'answerquestionnaire')) !!}
        {{ csrf_field() }}
    <div class="row large-12 columns">
        {!! Form::label('q1', 'Question 1:') !!}
        {!! Form::text('q1', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::label('q2', 'Question 2:') !!}
        {!! Form::text('q2', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::label('q3', 'Question 3:') !!}
        {!! Form::text('q3', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::label('q4', 'Question 4:') !!}
        {!! Form::text('q4', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::label('q5', 'Question 5:') !!}
        {!! Form::text('q5', null, ['class' => 'large-8 columns']) !!}
    </div>


    <div class="row large-4 columns">
        {!! Form::submit('Submit', ['class' => 'button']) !!}
    </div>
{!! Form::close() !!}

</body>
</html>