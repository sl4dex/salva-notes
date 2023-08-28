@extends('layouts.layout')
@section('title', 'Nota')
@section('extra_styles')
    <style>
        .container {
            height: 100%;
        }
        #putForm {
            height: 100%;
            width: 100%;
        }
        #delForm {
            display: inline-block;
        }
        #delForm button {
            background-color: mistyrose;
            border: 1px solid grey;
            border-radius: 2px;
        }
    </style>
@endsection
@section('scripts')
    {{-- showdownJS --}}
    <script src="https://cdn.jsdelivr.net/npm/showdown@2.1.0/dist/showdown.min.js"></script>
    <script>
        function toHtml() {
        let converter = new showdown.Converter();
        converter.setFlavor('github');
        let text = document.getElementById('editedContent').value;
        document.getElementById('html-content').innerHTML = converter.makeHtml(text);
        hljs.highlightAll();
        document.getElementById('putForm').style.display = 'none';
        document.getElementById('html-content').style.display = 'block';
    }
    function toMd() {
        document.getElementById('putForm').style.display = 'block';
        document.getElementById('html-content').style.display = 'none';
    }
    </script>
    {{-- highlightJS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/languages/go.min.js"></script>
    <script>hljs.highlightAll();</script>
@endsection

@section('content')
    <a href="/">
        <h1>Notas Md</h1>
    </a>
    <div class="container">
        <button onClick="toHtml()">HTML</button>
        <button onClick="toMd()">MD</button>
        <button type="submit" form="putForm">Save</button>

        <form id="delForm" action="{{$note->id}}" method="POST">
            {{csrf_field()}}
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <form method="post" id="putForm" action="{{$note->id}}">
            {{csrf_field()}}
            @method('PUT')
            <input name="editedTitle" value="{{$note->title}}" /><br>
            <textarea id='editedContent' name='editedContent'>{{$note->content_md}}</textarea>
        </form>

        <p id='html-content'></p>
    <div class="container">
@endsection
