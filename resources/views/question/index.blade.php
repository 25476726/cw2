 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>All Questions</title>
     <link rel="stylesheet" href="/css/foundation.css" />
 </head>
 <body>

    <nav>
            <button><a href="http://127.0.0.1:8000/">Home</a></button>
            <button><a href="http://127.0.0.1:8000/questionnaire">Questionnaires</a></button>
            <button class="buttonactive"><a href="http://127.0.0.1:8000/question">Questions</a></button>
            <button><a href="http://127.0.0.1:8000/option">Options</a></button>
            <button><a href="http://127.0.0.1:8000/users">Users</a></button>
    </nav>
    <header>
        <h1>All Questions</h1>
    </header>
 <section>
     @if (isset ($questions))

         <table>
             <tr>
                 <th>Question ID</th>
                 <th>Question Name</th>
                 <th>Question Description</th>
                 <th>Questionnaire that this Question is assigned to</th>
                 <th>View Question</th>
                 <th>Edit Question</th>
             </tr>
             @foreach ($questions as $question)
                 <tr>
                     <td> {{ $question->question_id }}</td>
                     <td>{{ $question->question_name }}</td>
                     <td> {{ $question->question_description }}</td>
                     <td> {{ $question->questionnaire_assigned_to }} </td>
                     <td><button><a href="http://127.0.0.1:8000/question/{{ $question->question_id }}">Click here to view the {{ $question->question_name }} Question</a></button></td>
                     <td><button><a href="/question/{{ $question->question_id }}/edit">Click here to edit the {{ $question->question_name }} Question</a></button></td>
                 </tr>
             @endforeach
         </table>
     @else
         <p>no questions</p>
     @endif
 </section>

 {{ Form::open(array('action' => 'QuestionController@create', 'method' => 'get')) }}<!-- calls question controller create method which redirects to /create -->
    <div class="row large-12 columns">
        {!! Form::submit('Create a new Question', ['class' => 'button']) !!}
    </div>
{{ Form::close() }}

 </body>
 </html>


