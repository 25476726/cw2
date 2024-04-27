<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Questionnaire</title>
    <link rel="stylesheet" href="/css/foundation.css" />
</head>
<body>
<header>
    <nav>
            <button><a href="http://127.0.0.1:8000/">Home</a></button>
            <button><a href="http://127.0.0.1:8000/questionnaire">Back to all Questionnaires</a></button> <!--smaller nav bar at top only containing options for home, and back to questionnaires page-->
    </nav>
</header>
<h1>Create a new Questionnaire</h1>

{!! Form::open(array('action' => 'QuestionnaireController@store', 'id' => 'createquestionnaire')) !!} <!--calls question controller store method-->
        {{ csrf_field() }}

    <div class="row large-12 columns">
        {!! Form::label('questionnaire_name', 'Questionnaire Name:') !!}
        {!! Form::text('questionnaire_name', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::label('questionnaire_description', 'Questionnaire Description:') !!}
        {!! Form::textarea('questionnaire_description', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::checkbox('livecomp', 'Live Completion Toggle:') !!}
        {!! Form::label('livecomp', 'Select for Live Completion mode, leave unselected for Development mode.') !!}
    </div>

    <div class="row large-4 columns">
        {!! Form::submit('Create Questionnaire', ['class' => 'button']) !!}
    </div>
{!! Form::close() !!}

</body>
</html>