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
            <button><a href="http://127.0.0.1:8000/question">Back to all Questions</a></button><!-- smaller nav bar containing only links to home or back to question page -->
    </nav>
</header>
<h1>Edit Question {{ $question->question_id }}</h1> <!-- displays id num of question that is being edited -->


        <!-- edit questionnaire form goes here -->
{!! Form::model($question, ['action' => 'QuestionController@update', 'method' => 'PATCH', 'url' => '/question/' , $question->question_id]) !!}

<div class="row large-12 columns">
    {!! Form::label('question_name', 'Question Name:') !!}
    {!! Form::text('question_name', null) !!}
</div>

<div class="row large-12 columns">
    {!! Form::label('question_description', 'Question Description:') !!}
    {!! Form::textarea('question_description', null) !!}
</div>

<div class="row large-12 columns">
    {!! Form::label('questionnaire_assigned_to', 'Questionnaire that this Question is assigned to (Enter the Question ID):') !!}
    {!! Form::textarea('questionnaire_assigned_to', null) !!}
</div>

<div class="row large-4 columns">
    {!! Form::submit('Update Question', ['class' => 'button']) !!}<!-- button class adds the foundation button styles -->
</div>


{!! Form::close() !!}<!-- closes edit questionnaire form -->
</body>
</html>