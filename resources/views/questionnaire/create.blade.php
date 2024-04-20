<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Questionnaire</title>
    <link rel="stylesheet" href="/css/foundation.css" />
</head>
<body>
<h1>Add Questionnaire</h1>

{!! Form::open(array('action' => 'QuestionnaireController@store', 'id' => 'createquestionnaire')) !!}
        {{ csrf_field() }}
    <div class="row large-12 columns">
    {!! Form::label('questionnaire_id', 'ID:') !!}
    {!! Form::text('questionnaire_id', null, ['class' => 'large-8 columns']) !!}
    </div>
    <div class="row large-12 columns">
        {!! Form::label('questionnaire_name', 'Title:') !!}
        {!! Form::text('questionnaire_name', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::label('questionnaire_description', 'Detail:') !!}
        {!! Form::textarea('questionnaire_description', null, ['class' => 'large-8 columns']) !!}
    </div>


    <div class="row large-4 columns">
        {!! Form::submit('Add Questionnaire', ['class' => 'button']) !!}
    </div>
{!! Form::close() !!}

</body>
</html>