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
            button{cursor:pointer}:disabled{cursor:default}
            table, th, td {border: 1px solid;}
            table {border-collapse: collapse;}
       </style>
     </head>
    <body class="antialiased">

            <h1>Notas Md</h1>
            <div>
                @foreach ($notes as $note)
                    <div>
                        <h3 class="font-semibold">{{$note->title}}</h3>
                        <!-- <p>{{ Illuminate\Mail\Markdown::parse($note->content_md) }}</p> -->
                        <p style="white-space: pre-line">{!! $note->content_render !!}</p>
                    </div>
                @endforeach
            </div>
                
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
            <table>
<thead>
<tr>
<th>id</th>
<th>name</th>
<th>date</th>
</tr>
</thead>
<tbody>
<tr>
<td>a</td>
<td>b</td>
<td>c</td>
</tr>
</tbody>
</table>
    </body>
</htmllang=>
