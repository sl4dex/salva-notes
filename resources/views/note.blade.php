<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
 
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
         <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

       <style>
            html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree}
            h1, h2, h3, h4, p {margin:0; padding: 0;}
            button{cursor:pointer}:disabled{cursor:default}
            table, th, td {border: 1px solid;}
            table {border-collapse: collapse;}
            h1 {background-color: mediumpurple;}
            .container {display: flex;}
            aside {width: 20%; background-color: lavender;}
            section {width: 70%;}
            a {text-decoration: none; color:inherit;}
            a:hover{color:cyan;}
       </style>
     </head>
    <body class="antialiased">

        <div class="wrapper">
        <a href="/">
            <h1>Notas Md</h1>
        </a>

            <div>
                <p>{{$note->title}}</p>
                <p>{{$note->content_md}}</p>
            </div>
        </div>

    </body>
</html>
