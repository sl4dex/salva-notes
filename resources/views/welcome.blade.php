@extends('layouts.layout')
@section('title', 'Home')
@section('extra_styles')
    <style>
        .container {
            display: flex;
            min-height: 100%;
            column-gap: 10px;
        }
        form {
            height: 100%;
            width: 100%;
        }
        #textarea-div {
            height: 100%;
            width: 100%;
        }
    </style>
@endsection
@section('content')
    <h1>Notas Md</h1>
    <div class="container">
        <aside>
            @foreach ($notes as $k => $note)
                @if ($k)<hr>@endif
                <div>
                    <a class="font-semibold" href="note/{{$note->id}}">{{$note->title}}</a>
                    <!-- <p>{{ Illuminate\Mail\Markdown::parse($note->content_md) }}</p> -->
                    <!-- <p style="white-space: pre-line">{!! $note->content_render !!}</p> -->
                </div>
            @endforeach
        </aside>
        <section>
            <form method="post" action="{{route('saveNote')}}" accept-charset="UTF-8">
                {{csrf_field()}}
                <button type="submit">Save</button>
                <div>
                    <input id="note-title" name="note_title" placeholder="Title" />
                </div>
                <div id="textarea-div">
                    <textarea id="note-desc" name="note_content" placeholder="Description"></textarea>
                </div>
            </form>
        </section>
    </div>
@endsection
