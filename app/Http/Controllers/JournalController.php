<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $journal = Journal::orderBy('created_at','desc')->paginate(5);
        return view('admin.journal.joournal')->with('journal',$journal);
    }
}
