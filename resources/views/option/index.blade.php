<!doctype html>
 <html lang="">
 <head>
     <meta charset="UTF-8">
     <title>All Options</title>
     <link rel="stylesheet" href="/css/foundation.css" />
 </head>
 <body>

 
 <section>
     @if (isset ($options))

         <table>
             <tr>
                 <th>option ID</th>
                 <th>option Name</th>
             </tr>
             @foreach ($options as $option)
                 <tr>
                     <td> {{ $option->id }}</td>
                     <td><a href="/option/{{ $option->option_id }}/edit" name="{{ $option->option_name }}">{{ $option->option_name }}</a></td>
                 </tr>
             @endforeach
         </table>
     @else
         <p>no options</p>
     @endif
 </section>

 {{ Form::open(array('action' => 'OptionController@create', 'method' => 'get')) }}
    <div class="row">
        {!! Form::submit('Add Option', ['class' => 'button']) !!}
    </div>
{{ Form::close() }}

 </body>
 </html>


