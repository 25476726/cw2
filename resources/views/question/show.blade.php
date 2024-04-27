<!doctype html>
 <html lang="">
 <head>
     <meta charset="UTF-8">
     <title>Question</title>
     <link rel="stylesheet" href="/css/foundation.css" />
 </head>
 <body>
 <header>
    <nav>
            <button><a href="http://127.0.0.1:8000/">Home</a></button>
            <button><a href="http://127.0.0.1:8000/question">Back to all Questions</a></button>
    </nav>
</header>
    <h1>Question </h1>
 <section>
     @if (isset ($question))
            <h1> {{ $question->question_name }} </h1>
            <p> {{ $question->question_description }} </p>
 </section>
     @else
         <p>no question</p>
     @endif

 </body>
 </html>


