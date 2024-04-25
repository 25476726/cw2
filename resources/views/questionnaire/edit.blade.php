<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit {{ $questionnaire->questionnaire_id }}</title>
    <link rel="stylesheet" href="/css/foundation.css" />
</head>
<body>
<h1>Edit - {{ $questionnaire->questionnaire_id }}</h1>


        <!-- form goes here -->
{!! Form::model($questionnaire, ['action' => 'QuestionnaireController@update', 'method' => 'PATCH', 'url' => '/questionnaire/' , $questionnaire->questionnaire_id]) !!}

<div>
    {!! Form::label('questionnaire_name', 'Name:') !!}
    {!! Form::text('questionnaire_name', null) !!}
</div>

<div>
    {!! Form::label('questionnaire_description', 'Description:') !!}
    {!! Form::textarea('questionnaire_description', null) !!}
</div>

<div>
    {!! Form::submit('Update Questionnaire') !!}
</div>


{!! Form::close() !!}
</body>
</html>