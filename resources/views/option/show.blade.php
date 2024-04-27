<!doctype html>
 <html lang="">
 <head>
     <meta charset="UTF-8">
     <title>Option</title>
     <link rel="stylesheet" href="/css/foundation.css" />
 </head>
 <body>
 <header>
    <nav>
            <button><a href="http://127.0.0.1:8000/">Home</a></button>
            <button><a href="http://127.0.0.1:8000/option">Back to all Options</a></button>
    </nav>
</header>
    <h1>Option </h1>
 <section>
     @if (isset ($option))
            <h1> {{ $option->option_name }} </h1>
 </section>
     @else
         <p>no option</p>
     @endif

 </body>
 </html>


