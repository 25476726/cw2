<!doctype html>
 <html lang="">
 <head>
     <meta charset="UTF-8">
     <title>Questionnaire</title>
     <link rel="stylesheet" href="/css/foundation.css" />
 </head>
 <body>
    <header>
    <nav>
            <button><a href="http://127.0.0.1:8000/">Home</a></button>
            <button><a href="http://127.0.0.1:8000/questionnaire">Back to all Questionnaires</a></button>
    </nav>
    </header>
 <section>
     @if (isset ($questionnaire))
            <h1> Questionnaire Name: {{ $questionnaire->questionnaire_name }} </h1>
            <h4> Questionnaire Description: {{ $questionnaire->questionnaire_description }} </h4>
            <div class="greyline"></div>
 </section>
     @else
         <h1>This questionnaire is not available, perhaps you entered a questionnaire id in the URL that does not exist?</h1>
     @endif
 <section>
     @if (isset ($questionnairequestions))
        <h3> Question Number {{ $questionnairequestions->question_id }}: {{ $questionnairequestions->question_name }} </h3>
        <h5> Question Description: {{ $questionnairequestions->question_description }} </h5>
        @if (isset ($questionoptions))
            <h6>{{ $questionoptions->option_name }}</h6>
            {{ Form::open() }}
            {!! Form::checkbox('checkbox', 'Checkbox') !!}
            {{ Form::close() }}
        @else
            {{ Form::open() }}
            <div class="row large-12 columns">
            {!! Form::label('response', 'Your answer here:') !!}
            {!! Form::text('response', null, ['class' => 'large-8 columns']) !!}
            </div>
            {{ Form::close() }}
        @endif
 </section>
     @else
         <h2>this questionnaire contains no questions</h2>
     @endif
<section>
 {{ Form::open() }}
    <div class="row large-12 columns">
        {!! Form::submit('Submit', ['class' => 'button']) !!}
    </div>
{{ Form::close() }}
</section>
 </body>
 </html>


