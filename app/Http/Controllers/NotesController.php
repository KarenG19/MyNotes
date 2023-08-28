<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{
    public function index()
    {
        // $mynotes = DB::table('mynotes')->get();

        $mynotes = Note::get();

        return view('notes.index', ['mynotes' => $mynotes]);
    }

    public function show(Note $idnote){
        return view('notes.show', ['note' => $idnote]);
    }
}
