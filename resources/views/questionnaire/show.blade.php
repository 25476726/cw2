<!doctype html>
 <html lang="">
 <head>
     <meta charset="UTF-8">
     <title>Questionnaire</title>
     <link rel="stylesheet" href="/css/foundation.css" />
 </head>
 <body>
    <h1>Questionnaire </h1>
 <section>
     @if (isset ($questionnaire))
            <h1> {{ $questionnaire->questionnaire_name }} </h1>
            <p> {{ $questionnaire->questionnaire_description }} </p>
 </section>
     @else
         <p>no questionnaire</p>
     @endif

<!--  {{ Form::open(array('action' => 'QuestionController@create', 'method' => 'get')) }}
    <div class="row">
        {!! Form::submit('Submit', ['class' => 'button']) !!}
    </div>
{{ Form::close() }} -->

 </body>
 </html>


