<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>All Options</title>
     <link rel="stylesheet" href="/css/foundation.css" />
 </head>
 <body>

    <nav>
            <button><a href="http://127.0.0.1:8000/">Home</a></button>
            <button><a href="http://127.0.0.1:8000/questionnaire">Questionnaires</a></button>
            <button><a href="http://127.0.0.1:8000/question">Questions</a></button>
            <button class="buttonactive"><a href="http://127.0.0.1:8000/option">Options</a></button>
            <button><a href="http://127.0.0.1:8000/users">Users</a></button>
    </nav>
    <header>
        <h1>All Options</h1>
    </header>

 <section>
     @if (isset ($options))

         <table>
             <tr>
                 <th>Option ID</th>
                 <th>Option Name</th>
                 <th>Question that this Option is assigned to</th>
                 <th>Edit Option</th>
             </tr>
             @foreach ($options as $option)
                 <tr>
                     <td> {{ $option->option_id }}</td>
                     <td>{{ $option->option_name }}</td>
                     <td> {{ $option->question_assigned_to }} </td>
                     <td><button><a href="/option/{{ $option->option_id }}/edit">Click here to edit the {{ $option->option_name }} option </a></button></td>
                 </tr>
             @endforeach
         </table>
     @else
         <p>no options</p>
     @endif
 </section>

 {{ Form::open(array('action' => 'OptionController@create', 'method' => 'get')) }}
    <div class="row large-12 columns">
        {!! Form::submit('Create a new Option', ['class' => 'button']) !!}
    </div>
{{ Form::close() }}

 </body>
 </html>


