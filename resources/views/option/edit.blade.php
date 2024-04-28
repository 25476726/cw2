<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit {{ $option->option_id }}</title>
    <link rel="stylesheet" href="/css/foundation.css" />
</head>
<body>
<header>
    <nav>
            <button><a href="http://127.0.0.1:8000/">Home</a></button>
            <button><a href="http://127.0.0.1:8000/option">Back to all Options</a></button><!-- smaller nav bar containing only links to home or back to option page -->
    </nav>
</header>
<h1>Edit - {{ $option->option_id }}</h1> <!-- displays id number of which option is being edited -->


        <!-- form goes here -->
{!! Form::model($option, ['action' => 'OptionController@update', 'method' => 'PATCH', 'url' => '/option/' , $option->option_id]) !!}

<div class="row large-12 columns">
    {!! Form::label('option_name', 'Option Name:') !!}
    {!! Form::text('option_name', null) !!}
</div>

<div class="row large-12 columns">
    {!! Form::label('question_assigned_to', 'Question that this Option is assigned to (Enter the Question ID):') !!}
    {!! Form::text('question_assigned_to', null) !!}
</div>

<div class="row large-12 columns">
    {!! Form::submit('Update Option', ['class' => 'button']) !!}<!-- button class adds the foundation button styles -->
</div>


{!! Form::close() !!}
</body>
</html>