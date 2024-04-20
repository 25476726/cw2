<!doctype html>
 <html lang="">
 <head>
     <meta charset="UTF-8">
     <title>All Users</title>
     <link rel="stylesheet" href="/css/foundation.css" />
 </head>
 <body>

 
 <section>
     @if (isset ($users))

         <table>
             <tr>
                 <th>ID</th>
                 <th>Username</th>
                 <th>Email</th>
             </tr>
             @foreach ($users as $user)
                 <tr>
                     <td> {{ $user->id }}</td>
                     <td><a href="/users/{{ $user->id }}/edit" name="{{ $user->name }}">{{ $user->name }}</a></td>
                     <td> {{ $user->email }}</td>
                 </tr>
             @endforeach
         </table>
     @else
         <p>no users</p>
     @endif
 </section>
 {{ Form::open(array('action' => 'UserController@create', 'method' => 'get')) }}
    <div class="row">
        {!! Form::submit('Add User', ['class' => 'button']) !!}
    </div>
{{ Form::close() }}
 </body>
 </html>