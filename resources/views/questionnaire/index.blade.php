<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>All Questionnaires</title>
     <link rel="stylesheet" href="/css/foundation.css" />
 </head>
 <body>

    <nav> <!--nav bar at top of page-->
            <button><a href="http://127.0.0.1:8000/">Home</a></button>
            <button class="buttonactive"><a href="http://127.0.0.1:8000/questionnaire">Questionnaires</a></button> <!--this class has the green background colour to indicate active button-->
            <button><a href="http://127.0.0.1:8000/question">Questions</a></button>
            <button><a href="http://127.0.0.1:8000/option">Options</a></button>
            <button><a href="http://127.0.0.1:8000/users">Users</a></button>
    </nav>
    <header>
        <h1>All Questionnaires</h1>
    </header>
 <section>
     @if (isset ($questionnaires))

         <table> <!--Table of all questionnaires and their details and options-->
             <tr>
                 <th>Questionnaire ID</th>
                 <th>Questionnaire Name</th>
                 <th>Questionnaire Description</th>
                 <th>Take Questionnaire</th>
                 <th>Edit Questionnaire</th>
             </tr>
             @foreach ($questionnaires as $questionnaire)
                 <tr>
                     <td> {{ $questionnaire->questionnaire_id }}</td>
                     <td>{{ $questionnaire->questionnaire_name }}</td>
                     <td> {{ $questionnaire->questionnaire_description }}</td>
                     <td><button><a href="http://127.0.0.1:8000/questionnaire/{{ $questionnaire->questionnaire_id }}">Click here to take the {{ $questionnaire->questionnaire_name }} Questionnaire</a></button></td>
                     <td><button><a href="/questionnaire/{{ $questionnaire->questionnaire_id }}/edit">Click here to edit the {{ $questionnaire->questionnaire_name }} Questionnaire</a></button></td>
                 </tr>
             @endforeach
         </table>
     @else <!--displays this message if no questionnaires are present in the database-->
         <p>no questionnaires</p>
     @endif
 </section>

 {{ Form::open(array('action' => 'QuestionnaireController@create', 'method' => 'get')) }} <!--Button at bottom of page to create a new questionnaire, links to create page-->
    <div class="row large-12 columns">
        {!! Form::submit('Create a new Questionnaire', ['class' => 'button']) !!}
    </div>
{{ Form::close() }}

 </body>
 </html>


