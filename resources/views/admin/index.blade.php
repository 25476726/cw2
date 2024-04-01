<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Index</title>
</head>
<body>
    <h1>Admin Index</h1>
    <section>
    @if (isset ($questions))

        <ul>
            @foreach ($questions as $question)
                <li>{{ $question->title }}</li>
            @endforeach
        </ul>
    @else
        <p> no questions added yet </p>
    @endif
</section>

{!! Form::open(['']) !!}
    <div class="row">
        {!! Form::submit('Complete Questionnaire', ['class' => 'button']) !!}
    </div>
{!! Form::close() !!}
</body>
</html>