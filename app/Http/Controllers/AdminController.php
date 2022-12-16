<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use App\Models\Reviewer;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $userShow = User::count();
        $journalShow = Journal::count();
        $reviewerShow = Reviewer::count();
        
        return view('admin.dashborad',compact('userShow','journalShow','reviewerShow'));
    }
}
