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
        <h1>Notas Md</h1>

            <!-- Añadir navbar -->

            <div class="container">
                <aside class="center">
                    @foreach ($notes as $k => $note)
                    @if ($k)
                        <hr>
                    @endif
                        <div>
                            <a class="font-semibold" href="note/{{$note->id}}" target="_blank">{{$note->title}}</a>
                            <!-- <p>{{ Illuminate\Mail\Markdown::parse($note->content_md) }}</p> -->
                            <!-- <p style="white-space: pre-line">{!! $note->content_render !!}</p> -->
                        </div>
                    @endforeach
                </aside>
                <section>
                    <form method="post" action="{{route('saveNote')}}" accept-charset="UTF-8">
                        {{csrf_field()}}
                        <div>
                            <input id="note-title" name="note_title" placeholder="Title" />
                        </div>
                        <div>
                            <textarea id="note-desc" name="note_content" placeholder="Description"></textarea>
                        </div>
                        <button type="submit">Save</button>
                    </form>
                </section>
            </div>
        </div>
    </body>
</html>
