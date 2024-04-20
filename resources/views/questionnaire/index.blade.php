<!doctype html>
 <html lang="">
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
             </tr>
             @foreach ($questionnaires as $questionnaire)
                 <tr>
                     <td> {{ $questionnaire->questionnaire_id }}</td>
                     <td><a href="/questionnaire/{{ $questionnaire->questionnaire_id }}/edit" name="{{ $questionnaire->questionnaire_name }}">{{ $questionnaire->questionnaire_name }}</a></td>
                     <td> {{ $questionnaire->questionnaire_description }}</td>
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


