<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{
    public function index()
    {
        $mynotes = DB::table('notes')->get();

        return view('notes', ['mynotes' => $mynotes]);
    }
}
