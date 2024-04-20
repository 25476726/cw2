<!doctype html>
 <html lang="">
 <head>
     <meta charset="UTF-8">
     <title>All Questions</title>
     <link rel="stylesheet" href="/css/app.css" />
     <link rel="stylesheet" href="/css/foundation.css" />
 </head>
 <body>

 
 <section>
     @if (isset ($questions))

         <table>
             <tr>
                 <th>Question ID</th>
                 <th>Question Name</th>
                 <th>Question Description</th>
             </tr>
             @foreach ($questions as $question)
                 <tr>
                     <td> {{ $question->question_id }}</td>
                     <td><a href="/question/{{ $question->question_id }}/edit" name="{{ $question->question_name }}">{{ $question->question_name }}</a></td>
                     <td> {{ $question->question_description }}</td>
                 </tr>
             @endforeach
         </table>
     @else
         <p>no questions</p>
     @endif
 </section>

 {{ Form::open(array('action' => 'QuestionController@create', 'method' => 'get')) }}
    <div class="row">
        {!! Form::submit('Add Question', ['class' => 'button']) !!}
    </div>
{{ Form::close() }}

 </body>
 </html>


