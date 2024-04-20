<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Questionnaire</title>
    <style>
            html, body {
                background-color: #0a0a0a;
                color: #fefefe;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
    </style>
</head>
<body>
<h1>Questionnaire</h1>

{!! Form::open(array('action' => 'AdminController@store', 'id' => 'answerquestionnaire')) !!}
        {{ csrf_field() }}
    <div class="row large-12 columns">
        <h2>What degree are you doing?</h2>
        <div>
        {!! Form::checkbox('q1a', 'Question 1a:') !!}
        {!! Form::label('q1a', 'Accesible Web Design and Development') !!}
        </div>
        <div>
        {!! Form::checkbox('q1b', 'Question 1b:') !!}
        {!! Form::label('q1b', 'Computing') !!}
        </div>
        <div>
        {!! Form::checkbox('q1c', 'Question 1c:') !!}
        {!! Form::label('q1c', 'Data Science') !!}
        </div>
        <div>
        {!! Form::checkbox('q1d', 'Question 1d:') !!}
        {!! Form::label('q1d', 'ITMB') !!}
        </div>
        <div>
        {!! Form::checkbox('q1e', 'Question 1e:') !!}
        {!! Form::label('q1e', 'Programming') !!}
        </div>
    </div>

    <div class="row large-12 columns">
        <h2>What car do you drive?</h2>
        <div>
        {!! Form::checkbox('q2a', 'Question 2a:') !!}
        {!! Form::label('q2a', 'Ford') !!}
        </div>
        <div>
        {!! Form::checkbox('q2b', 'Question 2b:') !!}
        {!! Form::label('q2b', 'Audi') !!}
        </div>
        <div>
        {!! Form::checkbox('q2c', 'Question 2c:') !!}
        {!! Form::label('q2c', 'BMW') !!}
        </div>
        <div>
        {!! Form::checkbox('q2d', 'Question 2d:') !!}
        {!! Form::label('q2d', 'Hyundai') !!}
        </div>
        <div>
        {!! Form::checkbox('q2e', 'Question 2e:') !!}
        {!! Form::label('q2e', 'Lexus') !!}
        </div>
        <div>
        {!! Form::checkbox('q2f', 'Question 2f:') !!}
        {!! Form::label('q2f', 'I dont drive') !!}        
        </div>
    </div>
    <div class="row large-12 columns">
        <h2>What is your favourite drink?</h2>
        <div>
        {!! Form::checkbox('q3a', 'Question 3a:') !!}
        {!! Form::label('q3a', 'Lager') !!}
        </div>
        <div>
        {!! Form::checkbox('q3b', 'Question 3b:') !!}
        {!! Form::label('q3b', 'Cider') !!}
        </div>
        <div>
        {!! Form::checkbox('q3c', 'Question 3c:') !!}
        {!! Form::label('q3c', 'Wine') !!}
        </div>
        <div>
        {!! Form::checkbox('q3d', 'Question 3d:') !!}
        {!! Form::label('q3d', 'Whiskey') !!}
        </div>
        <div>
        {!! Form::checkbox('q3e', 'Question 3e:') !!}
        {!! Form::label('q3e', 'Vodka') !!}
        </div>
        <div>
        {!! Form::checkbox('q3f', 'Question 3f:') !!}
        {!! Form::label('q3f', 'I dont drink ale') !!}
        </div>
    </div>
    <div class="row large-12 columns">
        <h2>Do you have any pets?</h2>
        <div>
        {!! Form::checkbox('q4a', 'Question 4a:') !!}
        {!! Form::label('q4a', 'Dog') !!}
        </div>
        <div>
        {!! Form::checkbox('q4b', 'Question 4b:') !!}
        {!! Form::label('q4b', 'Cat') !!}
        </div>
        <div>
        {!! Form::checkbox('q4c', 'Question 4c:') !!}
        {!! Form::label('q4c', 'Hamster') !!}
        </div>
        <div>
        {!! Form::checkbox('q4d', 'Question 4d:') !!}
        {!! Form::label('q4d', 'Fish') !!}
        </div>
        <div>
        {!! Form::checkbox('q4e', 'Question 4e:') !!}
        {!! Form::label('q4e', 'None') !!}
        </div>
    </div>
    <div class="row large-12 columns">
        <h2>Where are you from?</h2>
        <div>
        {!! Form::checkbox('q5a', 'Question 5a:') !!}
        {!! Form::label('q5a', 'Liverpool') !!}
        </div>
        <div>
        {!! Form::checkbox('q5b', 'Question 5b:') !!}
        {!! Form::label('q5b', 'Skelmersdale') !!}
        </div>
        <div>
        {!! Form::checkbox('q5c', 'Question 5c:') !!}
        {!! Form::label('q5c', 'Wirral') !!}
        </div>
        <div>
        {!! Form::checkbox('q5d', 'Question 5d:') !!}
        {!! Form::label('q5d', 'Blackpool') !!}
        </div>
        <div>
        {!! Form::checkbox('q5e', 'Question 5e:') !!}
        {!! Form::label('q5e', 'Somewhere else') !!}
        </div>
    </div>
    <div class="row large-4 columns">
        {!! Form::submit('Submit', ['class' => 'button']) !!}
    </div>
{!! Form::close() !!}

</body>
</html>