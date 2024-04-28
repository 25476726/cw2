<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Option</title>
    <link rel="stylesheet" href="/css/foundation.css" />
</head>
<body>
<header>
    <nav>
            <button><a href="http://127.0.0.1:8000/">Home</a></button>
            <button><a href="http://127.0.0.1:8000/option">Back to all Options</a></button><!-- smaller nav bar containing only links to home or back to option page -->
    </nav>
</header>
<h1>Add Option</h1>

{!! Form::open(array('action' => 'OptionController@store', 'id' => 'createoption')) !!} <!-- opens form and calls option controller store method -->
        {{ csrf_field() }}
    <div class="row large-12 columns">
        {!! Form::label('option_name', 'Option Name:') !!}
        {!! Form::text('option_name', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::label('question_assigned_to', 'Question that this Option is assigned to (Enter the Question ID):') !!}
        {!! Form::text('question_assigned_to', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-4 columns">
        {!! Form::submit('Add Option', ['class' => 'button']) !!}<!-- button class adds the foundation button styles -->
    </div>
{!! Form::close() !!}

</body>
</html>