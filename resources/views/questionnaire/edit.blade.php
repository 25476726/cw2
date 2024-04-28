<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Questionnaire {{ $questionnaire->questionnaire_id }}</title>
    <link rel="stylesheet" href="/css/foundation.css" /><!--applies foundation styles throughout the site-->
</head>
<body>
<header>
    <nav>
            <button><a href="http://127.0.0.1:8000/">Home</a></button>
            <button><a href="http://127.0.0.1:8000/questionnaire">Back to all Questionnaires</a></button> <!--smaller nav bar at top only containing options for home, and back to questionnaires page-->
    </nav>
</header>
<h1>Edit Questionnaire {{ $questionnaire->questionnaire_id }}</h1>


        <!-- edit questionnaire form goes here -->
{!! Form::model($questionnaire, ['action' => 'QuestionnaireController@update', 'method' => 'PATCH', 'url' => '/questionnaire/' , $questionnaire->questionnaire_id]) !!}

<div>
    {!! Form::label('questionnaire_name', 'Questionnaire Name:') !!}
    {!! Form::text('questionnaire_name', null) !!}
</div>

<div>
    {!! Form::label('questionnaire_description', 'Questionnaire Description:') !!}
    {!! Form::textarea('questionnaire_description', null) !!}
</div>

<div>
{!! Form::checkbox('livecomp', 'Live Completion:') !!}
{!! Form::label('livecomp', 'Select for Live Completion mode, leave unselected for Development mode.') !!}
</div>

<div>
{!! Form::submit('Update Questionnaire', ['class' => 'button']) !!}<!-- button class adds the foundation button styles -->
</div>


{!! Form::close() !!} <!-- closes edit questionnaire form -->
</body>
</html>