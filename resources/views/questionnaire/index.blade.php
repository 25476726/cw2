<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>All Questionnaires</title>
     <link rel="stylesheet" href="/css/foundation.css" />
 </head>
 <body>

 
 <section>
     @if (isset ($questionnaires))

         <table>
             <tr>
                 <th>Questionnaire ID</th>
                 <th>Questionnaire Name</th>
                 <th>Questionnaire Description</th>
                 <th>Take Questionnaire</th>
             </tr>
             @foreach ($questionnaires as $questionnaire)
                 <tr>
                     <td> {{ $questionnaire->questionnaire_id }}</td>
                     <td><a href="/questionnaire/{{ $questionnaire->questionnaire_id }}/edit" name="{{ $questionnaire->questionnaire_name }}">{{ $questionnaire->questionnaire_name }}</a></td>
                     <td> {{ $questionnaire->questionnaire_description }}</td>
                     <td><button><a href="http://127.0.0.1:8000/questionnaire/{{ $questionnaire->questionnaire_id }}">Click here to take the {{ $questionnaire->questionnaire_name }} Questionnaire</a></button></td>
                 </tr>
             @endforeach
         </table>
     @else
         <p>no questionnaires</p>
     @endif
 </section>

 {{ Form::open(array('action' => 'QuestionnaireController@create', 'method' => 'get')) }}
    <div class="row">
        {!! Form::submit('Add Questionnaire', ['class' => 'button']) !!}
    </div>
{{ Form::close() }}

 </body>
 </html>


