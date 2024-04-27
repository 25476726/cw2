<!doctype html>
 <html lang="">
 <head>
     <meta charset="UTF-8">
     <title>All Users</title>
     <link rel="stylesheet" href="/css/foundation.css" />
 </head>
 <body>
    <nav>
            <button><a href="http://127.0.0.1:8000/">Home</a></button>
            <button><a href="http://127.0.0.1:8000/questionnaire">Questionnaires</a></button>
            <button><a href="http://127.0.0.1:8000/question">Questions</a></button>
            <button><a href="http://127.0.0.1:8000/option">Options</a></button>
            <button class="buttonactive"><a href="http://127.0.0.1:8000/users">Users</a></button>
    </nav>
    <header>
        <h1>All Users</h1>
    </header>
 <section>
     @if (isset ($users))

         <table>
             <tr>
                 <th>ID</th>
                 <th>Username</th>
                 <th>Email</th>
                 <th>Edit this user</th>
             </tr>
             @foreach ($users as $user)
                 <tr>
                     <td> {{ $user->id }}</td>
                     <td>>{{ $user->name }}</td>
                     <td> {{ $user->email }}</td>
                     <td><button><a href="/users/{{ $user->id }}/edit">Edit this user</a></button></td>
                 </tr>
             @endforeach
         </table>
     @else
         <p>no users</p>
     @endif
 </section>
 {{ Form::open(array('action' => 'UserController@create', 'method' => 'get')) }}
    <div class="row large-12 columns">
        {!! Form::submit('Create New User', ['class' => 'button']) !!}
    </div>
{{ Form::close() }}
 </body>
 </html>