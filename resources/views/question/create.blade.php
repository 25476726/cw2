<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Question</title>
    <link rel="stylesheet" href="/css/foundation.css" />
</head>
<body>
<header>
    <nav>
            <button><a href="http://127.0.0.1:8000/">Home</a></button>
            <button><a href="http://127.0.0.1:8000/question">Back to all Questions</a></button> <!-- smaller nav bar containing only links to home or back to question page -->
    </nav>
</header>
<h1>Create New Question</h1>

{!! Form::open(array('action' => 'QuestionController@store', 'id' => 'createquestion')) !!} <!-- opens create question form and calls question controller store method. -->
        {{ csrf_field() }}
<!--     <div class="row large-12 columns">
    {!! Form::label('questionnaire_id', 'ID:') !!}
    {!! Form::text('questionnaire_id', null, ['class' => 'large-8 columns']) !!}
    </div> -->
    <div class="row large-12 columns">
        {!! Form::label('question_name', 'Question Name:') !!}
        {!! Form::text('question_name', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::label('question_description', 'Question Description:') !!}
        {!! Form::textarea('question_description', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::label('questionnaire_assigned_to', 'Questionnaire that this Question is assigned to (Enter the Questionnaire ID):') !!}
        {!! Form::textarea('questionnaire_assigned_to', null, ['class' => 'large-8 columns']) !!}
    </div>


    <div class="row large-4 columns">
        {!! Form::submit('Add Question', ['class' => 'button']) !!}<!-- button class adds the foundation button styles -->
    </div>
{!! Form::close() !!}<!-- closes create question form -->

</body>
</html>