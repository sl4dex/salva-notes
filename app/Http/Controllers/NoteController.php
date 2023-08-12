<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

use \League\CommonMark\Environment\Environment;
use League\CommonMark\MarkdownConverter;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\Table\TableExtension;




class NoteController extends Controller
{
    function postNote(Request $request)
    {
        $newNote = new Note;
        $newNote->title = $request->note_title;
        $newNote->content_md = $request->note_content;
        $newNote->save();

        return redirect('/');
    }

    // function getNotes() {

    // }
    function index()
    {
        $environment = new Environment();
        $environment->addExtension(new CommonMarkCoreExtension());

        // Add this extension
        $environment->addExtension(new TableExtension());
        \Log::info(Note::all());

        // Instantiate the converter engine and start converting some Markdown!
        $converter = new MarkdownConverter($environment);
        $notes = Note::all();
        foreach ($notes as $note) {
            $content_html = $converter($note->content_md);
            $note->content_render = $content_html;
        }
        return view('welcome', ['notes' => $notes]);
    }

    function getNote(Request $request, string $id)
    {
        \Log::info(Note::where('id', $id)->first());
        return view('note', [
            'note' => Note::where('id', $id)->first()
        ]);
    }
}