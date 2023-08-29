<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveNoteRequest;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{
    public function index()
    {
        $mynotes = Note::get();

        return view('notes.index', ['mynotes' => $mynotes]);
    }

    public function show(Note $idnote)
    {
        return view('notes.show', ['note' => $idnote]);
    }

    public function create()
    {
        return view('notes.create', ['note' => new Note]);
    }

    public function store(SaveNoteRequest $request)
    {
        Note::create($request->validated());

        return to_route('notes.index')->with('status', 'Your note was created!');
    }

    public function edit(Note $idnote)
    {
        return view('notes.edit', ['note' => $idnote]);
    }

    public function update(SaveNoteRequest $request, Note $idnote)
    {
        $idnote->update($request->validated());

        return to_route('notes.show', $idnote)->with('status', 'Your note was updated!');
    }

    public function destroy(Note $idnote){
        
        $idnote->delete();

        return to_route('notes.index')->with('status', "Note deleted!");
    }
}
