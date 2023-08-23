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
           body{min-height: 100vh; margin: 0px; display: flex;
                align-items: stretch; width: 100%; position: relative;
            }
           .wrapper{position: absolute;height: 100%; width: 100%;}
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
            #html-content{display: none;}
            textarea {
                border: none; outline: none; resize: none;
                position: absolute;height: 100%; width: 100%;
                -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
                -moz-box-sizing: border-box;    /* Firefox, other Gecko */
                box-sizing: border-box;         /* Opera/IE 8+ */
            }
       </style>
       <script src="https://cdn.jsdelivr.net/npm/showdown@2.1.0/dist/showdown.min.js"></script>
       <script>
        function toHtml() {
            let converter = new showdown.Converter();
            converter.setFlavor('github');

            let text = document.getElementById('editedContent').value;
            document.getElementById('html-content').innerHTML = converter.makeHtml(text);
            hljs.highlightAll();
            document.getElementById('editedContent').style.display = 'none';
            document.getElementById('html-content').style.display = 'block';
        }
        function toMd() {
            document.getElementById('editedContent').style.display = 'block';
            document.getElementById('html-content').style.display = 'none';
        }
       </script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/default.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>

        <!-- and it's easy to individually load additional languages -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/languages/go.min.js"></script>

        <script>hljs.highlightAll();</script>
     </head>
    <body class="antialiased">
        <div class="wrapper">
            <a href="/">
                <h1>Notas Md</h1>
            </a>
            <button onClick="toHtml()">HTML</button>
            <button onClick="toMd()">MD</button>
            <button type="submit" form="putForm">Save</button>
            <form action="{{$note->id}}" method="POST">
                {{csrf_field()}}
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-block">Delete</button>
            </form>
            <form method="post" id="putForm" action="{{$note->id}}">
                {{csrf_field()}}
                @method('PUT')
                <input name="editedTitle" value="{{$note->title}}"></input><br>
                <textarea id='editedContent' name='editedContent' >{{$note->content_md}}</textarea>
            </form>
            <p id='html-content'></p>
        </div>
    </body>
</html>
