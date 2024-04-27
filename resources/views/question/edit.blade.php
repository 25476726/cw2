<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit {{ $question->question_id }}</title>
    <link rel="stylesheet" href="/css/foundation.css" />
</head>
<body>
<header>
    <nav>
            <button><a href="http://127.0.0.1:8000/">Home</a></button>
            <button><a href="http://127.0.0.1:8000/question">Back to all Questions</a></button>
    </nav>
</header>
<h1>Edit Question {{ $question->question_id }}</h1>


        <!-- form goes here -->
{!! Form::model($question, ['action' => 'QuestionController@update', 'method' => 'PATCH', 'url' => '/question/' , $question->question_id]) !!}

<div>
    {!! Form::label('question_name', 'Name:') !!}
    {!! Form::text('question_name', null) !!}
</div>

<div>
    {!! Form::label('question_description', 'Description:') !!}
    {!! Form::textarea('question_description', null) !!}
</div>

<div>
    {!! Form::label('questionnaire_assigned_to', 'Questionnaire that this Question is assigned to:') !!}
    {!! Form::textarea('questionnaire_assigned_to', null) !!}
</div>

<div>
    {!! Form::submit('Update Question') !!}
</div>


{!! Form::close() !!}
</body>
</html>